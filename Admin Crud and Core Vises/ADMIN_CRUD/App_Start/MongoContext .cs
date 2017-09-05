using MongoDB.Driver;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace ADMIN_CRUD.App_Start
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