using Microsoft.AspNetCore.Builder;
using Microsoft.AspNetCore.Hosting;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Server.Kestrel.Core;
using Microsoft.Extensions.DependencyInjection;
using Microsoft.Extensions.Hosting;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Threading.Tasks;

namespace nMorph.core.nest.netcore31
{
    public class Startup
    {
        // This method gets called by the runtime. Use this method to add services to the container.
        // For more information on how to configure your application, visit https://go.microsoft.com/fwlink/?LinkID=398940
        public void ConfigureServices(IServiceCollection services)
        {
            // If using Kestrel:
            services.Configure<KestrelServerOptions>(options =>
            {
                options.AllowSynchronousIO = true;
            });

            // If using IIS:
            services.Configure<IISServerOptions>(options =>
            {
                options.AllowSynchronousIO = true;
            });
        }

        // This method gets called by the runtime. Use this method to configure the HTTP request pipeline.
        public void Configure(IApplicationBuilder app, IWebHostEnvironment env)
        {
            if (env.IsDevelopment())
            {
                app.UseDeveloperExceptionPage();
            }

            // Lectura de configuración desde la carpeta
            nMorph.core.service.configuration.Initializer.Application_Start(env.WebRootPath + "..\\..\\..\\config\\");

            app.UseRouting();

            app.UseEndpoints(endpoints =>
            {
                // Interfaz get de la raíz
                endpoints.MapGet("/", async context =>
                {
                    await context.Response.WriteAsync("nMorph Server");
                });

                // Interfaz get del servicio
                endpoints.MapGet("/Core", async context =>
                {
                    await context.Response.WriteAsync("nMorph endpoint");
                });

                // Procesamiento de servicios mediante controladores de nMorph
                endpoints.MapPost("/Core", async context =>
                {
                    using (var reader = new StreamReader(context.Request.Body))
                    {
                        string ResData;
                        string PostData = "";
                        try
                        {
                            // lee el contenido plano de la ejecución
                            PostData = reader.ReadToEnd();

                            // sino está vacío
                            if (PostData == "") return;

                            // procesa el pedido y obtiene la respuesta de la lógica
                            ResData = nMorph.framework.svc.transport.Router.Process(PostData);
                        }
                        catch (System.Exception ex)
                        {
                            {
                                global::haxe.NativeStackTrace.exception = ((global::System.Exception)(((object)(ex))));
                            }

                            global::haxe.Exception _g3 = global::haxe.Exception.caught(ex);
                            object _g4 = _g3.unwrap();
                            {
                                global::haxe.Exception ex2 = _g3;
                                ResData = global::nMorph.framework.svc.exceptions.ExceptionManager.HandleException(ex2, PostData, null, null, null, null, null);
                            }
                        }

                        context.Response.Clear();
                        context.Response.ContentType = "text/plain";
                        context.Response.Headers.Add("Access-Control-Allow-Origin", "*");
                        await context.Response.WriteAsync(ResData);
                    }
                });
            });
        }
    }
}
