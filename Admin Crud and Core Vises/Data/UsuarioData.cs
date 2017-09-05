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
    public class UsuarioData
    {
    

        //constructor
        public UsuarioData()
        {
           


        }
        public static string insertUserData(string userName, string lastName, string email, string pass)
        {
            MongoContext _dbContext = new MongoContext();

            var collection =_dbContext._database.GetCollection<Usuario>("usuario");

            Usuario user = new Usuario
            {
                userName = userName,
                lastName = lastName,
                state="enable",
                email = email,
                pass = pass
            };
            collection.Insert(user);

            return "insertado con exito";
       

        }//insertarUsuario

        public static string existUser(string userName)
        {
            MongoContext _dbContext = new MongoContext();
            List<string> res = new List<string>();
            var collection = _dbContext._database.GetCollection<Usuario>("usuario");
            string respuesta = "no existe";
            foreach (Usuario getUser in collection.FindAllAs<Usuario>())
            {
                if (getUser.userName == userName)
                {
                    respuesta = "existe";

                    
                }

            }
            return respuesta;
        }

        public static string loginUser(string userName, string pass) {
            MongoContext _dbContext = new MongoContext();
            List<string> res = new List<string>();
            var collection = _dbContext._database.GetCollection<Usuario>("usuario");
            string respuesta = "incorrecto";
            foreach (Usuario getUser in collection.FindAllAs<Usuario>())
            {
                if (getUser.userName == userName )
                {
                    if (getUser.pass == pass) {
                        respuesta = "correcto";

                    }
                }

            }
            return respuesta;

        }



    }//usuarioData
}
