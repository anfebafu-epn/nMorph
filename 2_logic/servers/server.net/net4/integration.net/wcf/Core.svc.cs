using System;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.Serialization;
using System.ServiceModel;
using System.Text;
namespace nMorph.core.nest.net4.wcf
{
    /// <summary>
    /// Clase base del servicio Core en WCF
    /// </summary>
    [ServiceContract]
    public class Core
    {
        /// <summary>
        /// Método Task_Search {"Name":"Task_Search","Parameters":[{"Name":"SearchTerm","Xtype":{"c":{"@path":"String"}}},{"Name":"CategoryID","Xtype":{"c":{"@path":"nMorph.framework.common.datatypes.UUID"}}},{"Name":"PersonID","Xtype":{"c":{"@path":"nMorph.framework.common.datatypes.UUID"}}}],"ReturnParameter":{"Name":"","Xtype":{"c":{"@path":"Array","c":{"@path":"nMorph.core.db.sw_todolist.Task_VTA"}}}},"LogicType":"nMorph.core.logic.task.TaskLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        /// <returns></returns>
        [OperationContract]
        public List<nMorph.core.db.sw_todolist.Task_VTA> Task_Search(string SearchTerm, nMorph.framework.common.datatypes.UUID CategoryID, nMorph.framework.common.datatypes.UUID PersonID)
        {
            nMorph.core.logic.task.TaskLogic lx = new nMorph.core.logic.task.TaskLogic();
            return lx.Task_Search(SearchTerm, CategoryID, PersonID).__a.Cast<nMorph.core.db.sw_todolist.Task_VTA>().ToList();
        }

        /// <summary>
        /// Método Task_GetByID {"Name":"Task_GetByID","Parameters":[{"Name":"ID","Xtype":{"c":{"@path":"nMorph.framework.common.datatypes.UUID"}}}],"ReturnParameter":{"Name":"","Xtype":{"c":{"@path":"nMorph.core.db.sw_todolist.Task"}}},"LogicType":"nMorph.core.logic.task.TaskLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        /// <returns></returns>
        [OperationContract]
        public nMorph.core.db.sw_todolist.Task Task_GetByID(nMorph.framework.common.datatypes.UUID ID)
        {
            nMorph.core.logic.task.TaskLogic lx = new nMorph.core.logic.task.TaskLogic();
            return lx.Task_GetByID(ID);
        }

        /// <summary>
        /// Método Task_SetComplete {"Name":"Task_SetComplete","Parameters":[{"Name":"ID","Xtype":{"c":{"@path":"nMorph.framework.common.datatypes.UUID"}}}],"ReturnParameter":{"Name":"","Xtype":{"x":{"@path":"Void"}}},"LogicType":"nMorph.core.logic.task.TaskLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        /// <returns></returns>
        [OperationContract]
        public void Task_SetComplete(nMorph.framework.common.datatypes.UUID ID)
        {
            nMorph.core.logic.task.TaskLogic lx = new nMorph.core.logic.task.TaskLogic();
            lx.Task_SetComplete(ID);
        }

        /// <summary>
        /// Método Task_Save {"Name":"Task_Save","Parameters":[{"Name":"UpdatedObj","Xtype":{"c":{"@path":"nMorph.core.db.sw_todolist.Task"}}}],"ReturnParameter":{"Name":"","Xtype":{"x":{"@path":"Void"}}},"LogicType":"nMorph.core.logic.task.TaskLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        /// <returns></returns>
        [OperationContract]
        public void Task_Save(nMorph.core.db.sw_todolist.Task UpdatedObj)
        {
            nMorph.core.logic.task.TaskLogic lx = new nMorph.core.logic.task.TaskLogic();
            lx.Task_Save(UpdatedObj);
        }

        /// <summary>
        /// Método Task_Delete {"Name":"Task_Delete","Parameters":[{"Name":"ID","Xtype":{"c":{"@path":"nMorph.framework.common.datatypes.UUID"}}}],"ReturnParameter":{"Name":"","Xtype":{"x":{"@path":"Void"}}},"LogicType":"nMorph.core.logic.task.TaskLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        /// <returns></returns>
        [OperationContract]
        public void Task_Delete(nMorph.framework.common.datatypes.UUID ID)
        {
            nMorph.core.logic.task.TaskLogic lx = new nMorph.core.logic.task.TaskLogic();
            lx.Task_Delete(ID);
        }

        /// <summary>
        /// Método Person_Login {"Name":"Person_Login","Parameters":[{"Name":"Email","Xtype":{"c":{"@path":"String"}}},{"Name":"password","Xtype":{"c":{"@path":"String"}}}],"ReturnParameter":{"Name":"","Xtype":{"c":{"@path":"nMorph.core.db.sw_todolist.Person"}}},"LogicType":"nMorph.core.logic.person.PersonLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        /// <returns></returns>
        [OperationContract]
        public nMorph.core.db.sw_todolist.Person Person_Login(string Email, string password)
        {
            nMorph.core.logic.person.PersonLogic lx = new nMorph.core.logic.person.PersonLogic();
            return lx.Person_Login(Email, password);
        }

        /// <summary>
        /// Método Person_Search {"Name":"Person_Search","Parameters":[{"Name":"SearchTerm","Xtype":{"c":{"@path":"String"}}}],"ReturnParameter":{"Name":"","Xtype":{"c":{"@path":"Array","c":{"@path":"nMorph.core.db.sw_todolist.Person"}}}},"LogicType":"nMorph.core.logic.person.PersonLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        /// <returns></returns>
        [OperationContract]
        public List<nMorph.core.db.sw_todolist.Person> Person_Search(string SearchTerm)
        {
            nMorph.core.logic.person.PersonLogic lx = new nMorph.core.logic.person.PersonLogic();
            return lx.Person_Search(SearchTerm).__a.Cast<nMorph.core.db.sw_todolist.Person>().ToList();
        }

        /// <summary>
        /// Método Person_GetByID {"Name":"Person_GetByID","Parameters":[{"Name":"ID","Xtype":{"c":{"@path":"nMorph.framework.common.datatypes.UUID"}}}],"ReturnParameter":{"Name":"","Xtype":{"c":{"@path":"nMorph.core.db.sw_todolist.Person"}}},"LogicType":"nMorph.core.logic.person.PersonLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        /// <returns></returns>
        [OperationContract]
        public nMorph.core.db.sw_todolist.Person Person_GetByID(nMorph.framework.common.datatypes.UUID ID)
        {
            nMorph.core.logic.person.PersonLogic lx = new nMorph.core.logic.person.PersonLogic();
            return lx.Person_GetByID(ID);
        }

        /// <summary>
        /// Método Person_Save {"Name":"Person_Save","Parameters":[{"Name":"UpdatedObj","Xtype":{"c":{"@path":"nMorph.core.db.sw_todolist.Person"}}}],"ReturnParameter":{"Name":"","Xtype":{"x":{"@path":"Void"}}},"LogicType":"nMorph.core.logic.person.PersonLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        /// <returns></returns>
        [OperationContract]
        public void Person_Save(nMorph.core.db.sw_todolist.Person UpdatedObj)
        {
            nMorph.core.logic.person.PersonLogic lx = new nMorph.core.logic.person.PersonLogic();
            lx.Person_Save(UpdatedObj);
        }

        /// <summary>
        /// Método Person_Delete {"Name":"Person_Delete","Parameters":[{"Name":"ID","Xtype":{"c":{"@path":"nMorph.framework.common.datatypes.UUID"}}}],"ReturnParameter":{"Name":"","Xtype":{"x":{"@path":"Void"}}},"LogicType":"nMorph.core.logic.person.PersonLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        /// <returns></returns>
        [OperationContract]
        public void Person_Delete(nMorph.framework.common.datatypes.UUID ID)
        {
            nMorph.core.logic.person.PersonLogic lx = new nMorph.core.logic.person.PersonLogic();
            lx.Person_Delete(ID);
        }

        /// <summary>
        /// Método Query {"Name":"Query","Parameters":[],"ReturnParameter":{"Name":"","Xtype":{"c":{"@path":"String"}}},"LogicType":"nMorph.core.logic.category.CategoryLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        /// <returns></returns>
        [OperationContract]
        public string Query()
        {
            nMorph.core.logic.category.CategoryLogic lx = new nMorph.core.logic.category.CategoryLogic();
            return lx.Query();
        }

        /// <summary>
        /// Método Category_Search {"Name":"Category_Search","Parameters":[{"Name":"SearchTerm","Xtype":{"c":{"@path":"String"}}}],"ReturnParameter":{"Name":"","Xtype":{"c":{"@path":"Array","c":{"@path":"nMorph.core.db.sw_todolist.Category"}}}},"LogicType":"nMorph.core.logic.category.CategoryLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        /// <returns></returns>
        [OperationContract]
        public List<nMorph.core.db.sw_todolist.Category> Category_Search(string SearchTerm)
        {
            nMorph.core.logic.category.CategoryLogic lx = new nMorph.core.logic.category.CategoryLogic();
            return lx.Category_Search(SearchTerm).__a.Cast<nMorph.core.db.sw_todolist.Category>().ToList();
        }

        /// <summary>
        /// Método Category_GetByID {"Name":"Category_GetByID","Parameters":[{"Name":"ID","Xtype":{"c":{"@path":"nMorph.framework.common.datatypes.UUID"}}}],"ReturnParameter":{"Name":"","Xtype":{"c":{"@path":"nMorph.core.db.sw_todolist.Category"}}},"LogicType":"nMorph.core.logic.category.CategoryLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        /// <returns></returns>
        [OperationContract]
        public nMorph.core.db.sw_todolist.Category Category_GetByID(nMorph.framework.common.datatypes.UUID ID)
        {
            nMorph.core.logic.category.CategoryLogic lx = new nMorph.core.logic.category.CategoryLogic();
            return lx.Category_GetByID(ID);
        }

        /// <summary>
        /// Método Category_Save {"Name":"Category_Save","Parameters":[{"Name":"UpdatedObj","Xtype":{"c":{"@path":"nMorph.core.db.sw_todolist.Category"}}}],"ReturnParameter":{"Name":"","Xtype":{"x":{"@path":"Void"}}},"LogicType":"nMorph.core.logic.category.CategoryLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        /// <returns></returns>
        [OperationContract]
        public void Category_Save(nMorph.core.db.sw_todolist.Category UpdatedObj)
        {
            nMorph.core.logic.category.CategoryLogic lx = new nMorph.core.logic.category.CategoryLogic();
            lx.Category_Save(UpdatedObj);
        }

        /// <summary>
        /// Método Category_Delete {"Name":"Category_Delete","Parameters":[{"Name":"ID","Xtype":{"c":{"@path":"nMorph.framework.common.datatypes.UUID"}}}],"ReturnParameter":{"Name":"","Xtype":{"x":{"@path":"Void"}}},"LogicType":"nMorph.core.logic.category.CategoryLogic, nMorph.core.logic, Version=2.0.2023.251, Culture=neutral, PublicKeyToken=null","logicNS":"nMorph.core.logic"}
        /// </summary>
        /// <returns></returns>
        [OperationContract]
        public void Category_Delete(nMorph.framework.common.datatypes.UUID ID)
        {
            nMorph.core.logic.category.CategoryLogic lx = new nMorph.core.logic.category.CategoryLogic();
            lx.Category_Delete(ID);
        }

    }
}
