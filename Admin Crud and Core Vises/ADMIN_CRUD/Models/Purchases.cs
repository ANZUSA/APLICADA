using MongoDB.Bson;
using MongoDB.Bson.Serialization.Attributes;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace ADMIN_CRUD.Models
{
    public class Purchases
    {


        [BsonId]
        public ObjectId id { get; set; }
        [BsonElement("idUser")]
        public string idUser { get; set; }
        [BsonElement("userName")]
        public string userName { get; set; }
        [BsonElement("date")]
        public string date { get; set; }
        [BsonElement("price")]
        public string price { get; set; }
      

    }
}