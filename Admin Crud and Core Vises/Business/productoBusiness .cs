using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

//agregamos el DLL de DATA y del Domain
using Data;
using Domain;
using MongoDB.Driver;

namespace Business
{
    public class productoBusiness
    {
            
        //constructor
        public productoBusiness() {
        }

        public static product insertProduct(product product)
        {
           return ProductoData.insertarProducto(product);
        }

        public static List<product> listProductBusiness()
        {
            return ProductoData.listProductDta();
        }

        public static List<product> oneProductBusiness(string code)
        {
            return ProductoData.oneProductData(code);

        }
        public static string deleteOneProduct(string code)
        {
            return ProductoData.deleteOneProduct(code);

        }
        public static string UpdateOneProduct(string oldProduct, string newProduct, string option)
        {
           
            return ProductoData.UpdateOneProduct(oldProduct, newProduct, option);

        }

        public static List<product> selectOneProductByName(string name)
        {
            return ProductoData.selectOneProductByName(name);

        }

        public static List<product> selectProductBySex(string sex)
        {
            return ProductoData.selectProductBySex(sex);

        }
    }
}
