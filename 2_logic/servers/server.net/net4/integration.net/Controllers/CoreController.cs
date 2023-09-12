using nMorph.core.nest.net4.Controllers;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Web;
using System.Web.Http;
namespace nMorph.core.nest.net4.Controllers
{
    /// <summary>
    /// Core Api
    /// </summary>
    [RoutePrefix("api/core")]
    public class CoreController : ApiController
    {
        public class Task_Search_Request_Obj
        {
            public string SearchTerm{ get; set; }
            public nMorph.framework.common.datatypes.UUID CategoryID{ get; set; }
            public nMorph.framework.common.datatypes.UUID PersonID{ get; set; }
        }

        /// <summary>
        /// Método Task_Search {"Name":"Task_Search","Parameters":[{"Name":"SearchTerm","Xtype":{"c":{"@path":"String"}}},{"Name":"CategoryID","Xtype":{"c":{"@path":"nMorph.framework.common.datatypes.UUID"}}},{"Name":"PersonID","Xtype":{"c":{"@path":"nMorph.framework.common.datatypes.UUID"}}}],"ReturnParameter":{"Name":"","Xtype":{"c":{"@path":"Array","c":{"@path":"nMorph.core.db.sw_todolist.Task_VTA"}}}},"LogicType":"nMorph.core.logic.task.TaskLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        [HttpPost]
        [Route("Task_Search")]
        public IHttpActionResult Task_Search([FromBody]Task_Search_Request_Obj requestObj)
        {
            nMorph.core.logic.task.TaskLogic lx = new nMorph.core.logic.task.TaskLogic();
            return Ok(lx.Task_Search(requestObj.SearchTerm, requestObj.CategoryID, requestObj.PersonID).__a.Cast<nMorph.core.db.sw_todolist.Task_VTA>().ToList());
        }

        public class Task_GetByID_Request_Obj
        {
            public nMorph.framework.common.datatypes.UUID ID{ get; set; }
        }

        /// <summary>
        /// Método Task_GetByID {"Name":"Task_GetByID","Parameters":[{"Name":"ID","Xtype":{"c":{"@path":"nMorph.framework.common.datatypes.UUID"}}}],"ReturnParameter":{"Name":"","Xtype":{"c":{"@path":"nMorph.core.db.sw_todolist.Task"}}},"LogicType":"nMorph.core.logic.task.TaskLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        [HttpPost]
        [Route("Task_GetByID")]
        public IHttpActionResult Task_GetByID([FromBody]Task_GetByID_Request_Obj requestObj)
        {
            nMorph.core.logic.task.TaskLogic lx = new nMorph.core.logic.task.TaskLogic();
            return Ok(lx.Task_GetByID(requestObj.ID));
        }

        public class Task_SetComplete_Request_Obj
        {
            public nMorph.framework.common.datatypes.UUID ID{ get; set; }
        }

        /// <summary>
        /// Método Task_SetComplete {"Name":"Task_SetComplete","Parameters":[{"Name":"ID","Xtype":{"c":{"@path":"nMorph.framework.common.datatypes.UUID"}}}],"ReturnParameter":{"Name":"","Xtype":{"x":{"@path":"Void"}}},"LogicType":"nMorph.core.logic.task.TaskLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        [HttpPost]
        [Route("Task_SetComplete")]
        public IHttpActionResult Task_SetComplete([FromBody]Task_SetComplete_Request_Obj requestObj)
        {
            nMorph.core.logic.task.TaskLogic lx = new nMorph.core.logic.task.TaskLogic();
            lx.Task_SetComplete(requestObj.ID);
            return Ok();
        }

        public class Task_Save_Request_Obj
        {
            public nMorph.core.db.sw_todolist.Task UpdatedObj{ get; set; }
        }

        /// <summary>
        /// Método Task_Save {"Name":"Task_Save","Parameters":[{"Name":"UpdatedObj","Xtype":{"c":{"@path":"nMorph.core.db.sw_todolist.Task"}}}],"ReturnParameter":{"Name":"","Xtype":{"x":{"@path":"Void"}}},"LogicType":"nMorph.core.logic.task.TaskLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        [HttpPost]
        [Route("Task_Save")]
        public IHttpActionResult Task_Save([FromBody]Task_Save_Request_Obj requestObj)
        {
            nMorph.core.logic.task.TaskLogic lx = new nMorph.core.logic.task.TaskLogic();
            lx.Task_Save(requestObj.UpdatedObj);
            return Ok();
        }

        public class Task_Delete_Request_Obj
        {
            public nMorph.framework.common.datatypes.UUID ID{ get; set; }
        }

        /// <summary>
        /// Método Task_Delete {"Name":"Task_Delete","Parameters":[{"Name":"ID","Xtype":{"c":{"@path":"nMorph.framework.common.datatypes.UUID"}}}],"ReturnParameter":{"Name":"","Xtype":{"x":{"@path":"Void"}}},"LogicType":"nMorph.core.logic.task.TaskLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        [HttpPost]
        [Route("Task_Delete")]
        public IHttpActionResult Task_Delete([FromBody]Task_Delete_Request_Obj requestObj)
        {
            nMorph.core.logic.task.TaskLogic lx = new nMorph.core.logic.task.TaskLogic();
            lx.Task_Delete(requestObj.ID);
            return Ok();
        }

        public class Person_Login_Request_Obj
        {
            public string Email{ get; set; }
            public string password{ get; set; }
        }

        /// <summary>
        /// Método Person_Login {"Name":"Person_Login","Parameters":[{"Name":"Email","Xtype":{"c":{"@path":"String"}}},{"Name":"password","Xtype":{"c":{"@path":"String"}}}],"ReturnParameter":{"Name":"","Xtype":{"c":{"@path":"nMorph.core.db.sw_todolist.Person"}}},"LogicType":"nMorph.core.logic.person.PersonLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        [HttpPost]
        [Route("Person_Login")]
        public IHttpActionResult Person_Login([FromBody]Person_Login_Request_Obj requestObj)
        {
            nMorph.core.logic.person.PersonLogic lx = new nMorph.core.logic.person.PersonLogic();
            return Ok(lx.Person_Login(requestObj.Email, requestObj.password));
        }

        public class Person_Search_Request_Obj
        {
            public string SearchTerm{ get; set; }
        }

        /// <summary>
        /// Método Person_Search {"Name":"Person_Search","Parameters":[{"Name":"SearchTerm","Xtype":{"c":{"@path":"String"}}}],"ReturnParameter":{"Name":"","Xtype":{"c":{"@path":"Array","c":{"@path":"nMorph.core.db.sw_todolist.Person"}}}},"LogicType":"nMorph.core.logic.person.PersonLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        [HttpPost]
        [Route("Person_Search")]
        public IHttpActionResult Person_Search([FromBody]Person_Search_Request_Obj requestObj)
        {
            nMorph.core.logic.person.PersonLogic lx = new nMorph.core.logic.person.PersonLogic();
            return Ok(lx.Person_Search(requestObj.SearchTerm).__a.Cast<nMorph.core.db.sw_todolist.Person>().ToList());
        }

        public class Person_GetByID_Request_Obj
        {
            public nMorph.framework.common.datatypes.UUID ID{ get; set; }
        }

        /// <summary>
        /// Método Person_GetByID {"Name":"Person_GetByID","Parameters":[{"Name":"ID","Xtype":{"c":{"@path":"nMorph.framework.common.datatypes.UUID"}}}],"ReturnParameter":{"Name":"","Xtype":{"c":{"@path":"nMorph.core.db.sw_todolist.Person"}}},"LogicType":"nMorph.core.logic.person.PersonLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        [HttpPost]
        [Route("Person_GetByID")]
        public IHttpActionResult Person_GetByID([FromBody]Person_GetByID_Request_Obj requestObj)
        {
            nMorph.core.logic.person.PersonLogic lx = new nMorph.core.logic.person.PersonLogic();
            return Ok(lx.Person_GetByID(requestObj.ID));
        }

        public class Person_Save_Request_Obj
        {
            public nMorph.core.db.sw_todolist.Person UpdatedObj{ get; set; }
        }

        /// <summary>
        /// Método Person_Save {"Name":"Person_Save","Parameters":[{"Name":"UpdatedObj","Xtype":{"c":{"@path":"nMorph.core.db.sw_todolist.Person"}}}],"ReturnParameter":{"Name":"","Xtype":{"x":{"@path":"Void"}}},"LogicType":"nMorph.core.logic.person.PersonLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        [HttpPost]
        [Route("Person_Save")]
        public IHttpActionResult Person_Save([FromBody]Person_Save_Request_Obj requestObj)
        {
            nMorph.core.logic.person.PersonLogic lx = new nMorph.core.logic.person.PersonLogic();
            lx.Person_Save(requestObj.UpdatedObj);
            return Ok();
        }

        public class Person_Delete_Request_Obj
        {
            public nMorph.framework.common.datatypes.UUID ID{ get; set; }
        }

        /// <summary>
        /// Método Person_Delete {"Name":"Person_Delete","Parameters":[{"Name":"ID","Xtype":{"c":{"@path":"nMorph.framework.common.datatypes.UUID"}}}],"ReturnParameter":{"Name":"","Xtype":{"x":{"@path":"Void"}}},"LogicType":"nMorph.core.logic.person.PersonLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        [HttpPost]
        [Route("Person_Delete")]
        public IHttpActionResult Person_Delete([FromBody]Person_Delete_Request_Obj requestObj)
        {
            nMorph.core.logic.person.PersonLogic lx = new nMorph.core.logic.person.PersonLogic();
            lx.Person_Delete(requestObj.ID);
            return Ok();
        }

        public class Query_Request_Obj
        {
        }

        /// <summary>
        /// Método Query {"Name":"Query","Parameters":[],"ReturnParameter":{"Name":"","Xtype":{"c":{"@path":"String"}}},"LogicType":"nMorph.core.logic.category.CategoryLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        [HttpPost]
        [Route("Query")]
        public IHttpActionResult Query([FromBody]Query_Request_Obj requestObj)
        {
            nMorph.core.logic.category.CategoryLogic lx = new nMorph.core.logic.category.CategoryLogic();
            return Ok(lx.Query());
        }

        public class Category_Search_Request_Obj
        {
            public string SearchTerm{ get; set; }
        }

        /// <summary>
        /// Método Category_Search {"Name":"Category_Search","Parameters":[{"Name":"SearchTerm","Xtype":{"c":{"@path":"String"}}}],"ReturnParameter":{"Name":"","Xtype":{"c":{"@path":"Array","c":{"@path":"nMorph.core.db.sw_todolist.Category"}}}},"LogicType":"nMorph.core.logic.category.CategoryLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        [HttpPost]
        [Route("Category_Search")]
        public IHttpActionResult Category_Search([FromBody]Category_Search_Request_Obj requestObj)
        {
            nMorph.core.logic.category.CategoryLogic lx = new nMorph.core.logic.category.CategoryLogic();
            return Ok(lx.Category_Search(requestObj.SearchTerm).__a.Cast<nMorph.core.db.sw_todolist.Category>().ToList());
        }

        public class Category_GetByID_Request_Obj
        {
            public nMorph.framework.common.datatypes.UUID ID{ get; set; }
        }

        /// <summary>
        /// Método Category_GetByID {"Name":"Category_GetByID","Parameters":[{"Name":"ID","Xtype":{"c":{"@path":"nMorph.framework.common.datatypes.UUID"}}}],"ReturnParameter":{"Name":"","Xtype":{"c":{"@path":"nMorph.core.db.sw_todolist.Category"}}},"LogicType":"nMorph.core.logic.category.CategoryLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        [HttpPost]
        [Route("Category_GetByID")]
        public IHttpActionResult Category_GetByID([FromBody]Category_GetByID_Request_Obj requestObj)
        {
            nMorph.core.logic.category.CategoryLogic lx = new nMorph.core.logic.category.CategoryLogic();
            return Ok(lx.Category_GetByID(requestObj.ID));
        }

        public class Category_Save_Request_Obj
        {
            public nMorph.core.db.sw_todolist.Category UpdatedObj{ get; set; }
        }

        /// <summary>
        /// Método Category_Save {"Name":"Category_Save","Parameters":[{"Name":"UpdatedObj","Xtype":{"c":{"@path":"nMorph.core.db.sw_todolist.Category"}}}],"ReturnParameter":{"Name":"","Xtype":{"x":{"@path":"Void"}}},"LogicType":"nMorph.core.logic.category.CategoryLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        [HttpPost]
        [Route("Category_Save")]
        public IHttpActionResult Category_Save([FromBody]Category_Save_Request_Obj requestObj)
        {
            nMorph.core.logic.category.CategoryLogic lx = new nMorph.core.logic.category.CategoryLogic();
            lx.Category_Save(requestObj.UpdatedObj);
            return Ok();
        }

        public class Category_Delete_Request_Obj
        {
            public nMorph.framework.common.datatypes.UUID ID{ get; set; }
        }

        /// <summary>
        /// Método Category_Delete {"Name":"Category_Delete","Parameters":[{"Name":"ID","Xtype":{"c":{"@path":"nMorph.framework.common.datatypes.UUID"}}}],"ReturnParameter":{"Name":"","Xtype":{"x":{"@path":"Void"}}},"LogicType":"nMorph.core.logic.category.CategoryLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        [HttpPost]
        [Route("Category_Delete")]
        public IHttpActionResult Category_Delete([FromBody]Category_Delete_Request_Obj requestObj)
        {
            nMorph.core.logic.category.CategoryLogic lx = new nMorph.core.logic.category.CategoryLogic();
            lx.Category_Delete(requestObj.ID);
            return Ok();
        }

    }
}
