using MongoDB.Bson;
using MongoDB.Bson.Serialization.Attributes;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace ADMIN_CRUD.Models
{
    [BsonIgnoreExtraElements]

    public class ListPurchaseModel
    {


        [BsonId]
        public ObjectId id { get; set; }
        [BsonElement("idCompra")]
        public string idCompra { get; set; }
        [BsonElement("codigoProdcuto")]
        public string codigoProdcuto { get; set; }
        [BsonElement("name")]
        public string name { get; set; }
        [BsonElement("price")]
        public string price { get; set; }
        
    

    }
}