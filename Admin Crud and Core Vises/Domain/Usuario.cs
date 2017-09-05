using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MongoDB.Bson;
using MongoDB.Driver;

namespace Domain
{
    public class Usuario
    {

        //se crean los atributos que contiene la coleccion "usuarios"
        //tienen que llamarse exactamente igual que en la coleccion en mongoDB
        //esto se pasara por el JSON
        //constructor vacio para poder instanciar la clase
        public Usuario() { }



        public ObjectId id { get; set; }
        public string userName { get; set; }
        public string lastName { get; set; }
        public string state { get; set; }

        public string email { get; set; }
        public string pass { get; set; }


       
       

    }
}
