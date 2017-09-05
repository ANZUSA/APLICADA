using MongoDB.Bson;
using MongoDB.Bson.Serialization.Attributes;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace ADMIN_CRUD.Models
{
    public class ProductModel
    {
        [BsonId]
        public ObjectId id { get; set; }
        [BsonElement("code")]
        public string code { get; set; }
        [BsonElement("categoria")]
        public string categoria { get; set; }
        [BsonElement("name")]
        public string name { get; set; }
        [BsonElement("price")]
        public string price { get; set; }
        [BsonElement("img")]
        public string img { get; set; }
        [BsonElement("sex")]
        public string sex { get; set; }
    }
}