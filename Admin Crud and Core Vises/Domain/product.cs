using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MongoDB.Bson;
using MongoDB.Driver;

namespace Domain
{

    public class product
    {
        public product() { }
        public ObjectId id { get; set; }
        public string code { get; set; }
        public string categoria { get; set; }
        public string name { get; set; }

        public string price { get; set; }
        public string img { get; set; }
        public string sex { get; set; }
    }
}
