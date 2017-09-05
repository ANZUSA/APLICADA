using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MongoDB.Bson;
using MongoDB.Driver;

//agrego la referencia a la DLL del Domain
using Domain;
using MongoDB.Driver.Builders;

namespace Data
{
    public class ProductoData
    {
        //constructor
        public ProductoData()
        {

        }

        public static product insertarProducto(product product) {

            string connectstring1 = "mongodb://admin:123admin@ds149433.mlab.com:49433/corevisesdb";

            MongoClient client = new MongoClient(connectstring1);

            var db = client.GetDatabase("corevisesdb");

            //obtenemos la coleccion en la que vamos a almacenar el objeto
            var collection = db.GetCollection<product>("producto");


            //insertamos el objeto
           
            collection.InsertOneAsync(product);


            Console.ReadLine();
            return product;

        }//insertarProducto

        public static List<product> oneProductData(string code)
        {
            string connectstring1 = "mongodb://admin:123admin@ds149433.mlab.com:49433/corevisesdb";

            MongoClient client = new MongoClient(connectstring1);
            MongoServer ms = client.GetServer();

            MongoDatabase db = ms.GetDatabase("corevisesdb");

            //obtenemos la coleccion en la que vamos a almacenar el objeto
            var collection = db.GetCollection<product>("producto");
            List<product> products = new List<product>();


            foreach (product getProduct in collection.FindAllAs<product>())
            {
                if (getProduct.code == code)
                {

                    products.Add (getProduct);
                }
               
            }

            return products;
        }

        public static List<product> selectProductBySex(string sex)
        {
            string connectstring1 = "mongodb://admin:123admin@ds149433.mlab.com:49433/corevisesdb";

            MongoClient client = new MongoClient(connectstring1);
            MongoServer ms = client.GetServer();

            MongoDatabase db = ms.GetDatabase("corevisesdb");

            //obtenemos la coleccion en la que vamos a almacenar el objeto
            var collection = db.GetCollection<product>("producto");
            List<product> products = new List<product>();


            foreach (product getProduct in collection.FindAllAs<product>())
            {
                if (getProduct.sex == sex)
                {

                    products.Add(getProduct);
                }

            }

            return products;
        }

        public static List<product> selectOneProductByName(string name)
        {
            string connectstring1 = "mongodb://admin:123admin@ds149433.mlab.com:49433/corevisesdb";

            MongoClient client = new MongoClient(connectstring1);
            MongoServer ms = client.GetServer();

            MongoDatabase db = ms.GetDatabase("corevisesdb");

            //obtenemos la coleccion en la que vamos a almacenar el objeto
            var collection = db.GetCollection<product>("producto");
            List<product> products = new List<product>();


            foreach (product getProduct in collection.FindAllAs<product>())
            {
                if (getProduct.name == name)
                {

                    products.Add(getProduct);
                }

            }

            return products;
        }

        public static List<product> listProductDta()
        {

            string connectstring1 = "mongodb://admin:123admin@ds149433.mlab.com:49433/corevisesdb";

            MongoClient client = new MongoClient(connectstring1);
            MongoServer ms = client.GetServer();

            MongoDatabase db = ms.GetDatabase("corevisesdb");

            //obtenemos la coleccion en la que vamos a almacenar el objeto
            var collection = db.GetCollection<product>("producto");
            List<product> products = new List<product>();

            foreach (product getProduct in collection.FindAllAs<product>())
            {
                products.Add(getProduct);
            }

            return products;
        }

        public static string deleteOneProduct(string code)
        {
            string connectstring1 = "mongodb://admin:123admin@ds149433.mlab.com:49433/corevisesdb";

            MongoClient client = new MongoClient(connectstring1);
            MongoServer ms = client.GetServer();

            MongoDatabase db = ms.GetDatabase("corevisesdb");

            //obtenemos la coleccion en la que vamos a almacenar el objeto
            var collection = db.GetCollection<product>("producto");
            List<product> products = new List<product>();

            string result = "hubo en error a la hora de eliminar el producto";
            foreach (product getProduct in collection.FindAllAs<product>())
            {
                if (getProduct.code == code)
                {
                    var query = Query.EQ("code", getProduct.code);
                    collection.Remove(query);
                    result = "eliminado correctamente";
                }

            }

            return result;
        }

        public static string UpdateOneProduct( string oldProduct, string newProduct, string option)
        {

            string connectstring1 = "mongodb://admin:123admin@ds149433.mlab.com:49433/corevisesdb";

            MongoClient client = new MongoClient(connectstring1);
            MongoServer ms = client.GetServer();

            MongoDatabase db = ms.GetDatabase("corevisesdb");
            var collection = db.GetCollection<product>("producto");
            FindAndModifyArgs args;
            string result = "Hubo un error al actualizar el producto"; 
            switch (option)
            {
                case "name":
                    args = new FindAndModifyArgs()
                    {
                        Query = Query.EQ("code", oldProduct),
                        Update = Update.Set("name", newProduct),

                        Upsert = false,
                        SortBy = null,
                        VersionReturned = FindAndModifyDocumentVersion.Original,
                    };
                    FindAndModifyResult res = collection.FindAndModify(args);
                    result = "el nombre se actualizo";
                    break;
                case "img":
               
                    args = new FindAndModifyArgs()
                    {
                        Query = Query.EQ("code", oldProduct),
                        Update = Update.Set("img", newProduct),

                        Upsert = false,
                        SortBy = null,
                        VersionReturned = FindAndModifyDocumentVersion.Original,
                    };
                    result = "la imagen se actualizo";

                    break;
                case "price":

                    args = new FindAndModifyArgs()
                    {
                        Query = Query.EQ("code", oldProduct),
                        Update = Update.Set("price", newProduct),

                        Upsert = false,
                        SortBy = null,
                        VersionReturned = FindAndModifyDocumentVersion.Original,
                    };
                    result = "el precio se actualizo";

                    break;
                case "stock":

                    args = new FindAndModifyArgs()
                    {
                        Query = Query.EQ("code", oldProduct),
                        Update = Update.Set("stock", newProduct),

                        Upsert = false,
                        SortBy = null,
                        VersionReturned = FindAndModifyDocumentVersion.Original,
                    };
                    result = "stock se actualizo";

                    break;

                default:
                    Console.WriteLine("Default case");
                    break;
            }



            //obtenemos la coleccion en la que vamos a almacenar el objeto
            
            return result;

        }
    }//productoData
}
