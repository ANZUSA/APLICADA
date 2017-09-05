using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MongoDB.Driver;

namespace Data
{
    public class MongoContext
    {

        MongoClient _client;
        MongoServer _server;
        public MongoDatabase _database;
        public MongoContext()        //constructor   
        {


            _client = new MongoClient("mongodb://admin:123admin@ds149433.mlab.com:49433/corevisesdb");
            _server = _client.GetServer();
            _database = _server.GetDatabase("corevisesdb");
        }
    }
}
