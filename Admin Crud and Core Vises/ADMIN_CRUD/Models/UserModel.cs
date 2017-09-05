using MongoDB.Bson;
using MongoDB.Bson.Serialization.Attributes;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace ADMIN_CRUD.Models
{
    public class UserModel
    {
    
        [BsonId]
        public ObjectId id { get; set; }
        [BsonElement("userName")]
        public string userName { get; set; }
        [BsonElement("lastName")]
        public string lastName { get; set; }
        [BsonElement("state")]
        public string state { get; set; }
        [BsonElement("email")]

        public string email { get; set; }
        [BsonElement("pass")]
        public string pass { get; set; }
     
    }
}