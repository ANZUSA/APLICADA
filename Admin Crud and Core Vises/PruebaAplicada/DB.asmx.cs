using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Services;
using MongoDB.Bson;
using MongoDB.Driver;

using Data;
using Domain;

namespace PruebaAplicada
{
    /// <summary>
    /// Summary description for WebService1
    /// </summary>
    [WebService(Namespace = "http://tempuri.org/")]
    [WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]
    [System.ComponentModel.ToolboxItem(false)]
    // To allow this Web Service to be called from script, using ASP.NET AJAX, uncomment the following line. 
    // [System.Web.Script.Services.ScriptService]
    public class WebService1 : System.Web.Services.WebService
    {

        [WebMethod]
        public void insertProductData()
        {

            Business.productoBusiness.insertProduct(new product { code = "R1", categoria = "Atletismo", name="Tannis Runnig",
                price = "50000", img = "sc/product-images/f2.jpg", sex = "H" });
             
        }
        [WebMethod]
        public List<product> selectProductData() { 
        

           return Business.productoBusiness.listProductBusiness();

        }

        [WebMethod]
        public List<product> selectOneProductData(string code)
        {


            return Business.productoBusiness.oneProductBusiness(code);

        }
        [WebMethod]
        public string deleteOneProductData(string code)
        {


            return Business.productoBusiness.deleteOneProduct(code);

        }
        [WebMethod]
        public  string UpdateOneProduct(string oldProduct, string newProduct, string option)
        {

            return Business.productoBusiness.UpdateOneProduct(oldProduct, newProduct, option);
        }
        [WebMethod]
        public string insertUserData(string userName, string lastName, string email, string pass) {

            return Business.UsuarioBusiness.insertUserData(userName, lastName, email, pass);
        }
        [WebMethod]
        public string loginUser(string userName, string pass) {

            return Business.UsuarioBusiness.loginUser(userName, pass );

        }

         [WebMethod]
        public string existUser(string userName) {

            return Business.UsuarioBusiness.existUser(userName);

        }

        [WebMethod]
        public  List<product> selectOneProductByName(string name)
        {


            return Business.productoBusiness.selectOneProductByName(name);

        }
        [WebMethod]
        public List<product> selectProductBySex(string sex)
        {


            return Business.productoBusiness.selectProductBySex(sex);

        }


    }
}
