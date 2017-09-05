using ADMIN_CRUD.App_Start;
using ADMIN_CRUD.Models;
using MongoDB.Bson;
using MongoDB.Driver;
using MongoDB.Driver.Builders;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace ADMIN_CRUD.Controllers
{
    public class UserController : Controller
    {

        MongoContext _dbContext;

        public UserController()
        {
            _dbContext = new MongoContext();
        }


        // GET: User
        public ActionResult Index()
        {
            var UsertDetails = _dbContext._database.GetCollection<UserModel>("usuario").FindAll().ToList();
            return View(UsertDetails);
        }

        // GET: User/Details/5
        public ActionResult Details(string id)
        {
            var userId = Query<ProductModel>.EQ(p => p.id, new ObjectId(id));
            var usertDetails = _dbContext._database.GetCollection<UserModel>("usuario").FindOne(userId);
            return View(usertDetails);
        }

        // GET: User/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: User/Create
        [HttpPost]
        public ActionResult Create(UserModel collection)
        {

            try
            {
                var document = _dbContext._database.GetCollection<BsonDocument>("usuario");

                var query = Query.And(Query.EQ("name", collection.userName));

                var count = document.FindAs<UserModel>(query).Count();

                if (count == 0)
                {
                    var result = document.Insert(collection);
                }
                else
                {
                    TempData["Message"] = "Code ALready Exist";
                    return View("Create", collection);
                }
                return RedirectToAction("Index");
            }
            catch
            {
                return View();
            }
        }

        // GET: User/Edit/5
        public ActionResult Edit(string id)
        {
            var document = _dbContext._database.GetCollection<UserModel>("usuario");

            var userDetailscount = document.FindAs<UserModel>(Query.EQ("_id", new ObjectId(id))).Count();

            if (userDetailscount > 0)
            {
                var userObjectid = Query<UserModel>.EQ(p => p.id, new ObjectId(id));

                var userDetail = _dbContext._database.GetCollection<UserModel>("usuario").FindOne(userObjectid);

                return View(userDetail);
            }
            return RedirectToAction("Index");
        }

        // POST: User/Edit/5
        [HttpPost]
        public ActionResult Edit(string id, UserModel collection)
        {
            try
            {
                collection.id = new ObjectId(id);
                //Mongo Query  
                var userObjectId = Query<ProductModel>.EQ(p => p.id, new ObjectId(id));
                // Document Collections  
                var collection2 = _dbContext._database.GetCollection<UserModel>("usuario");
                // Document Update which need Id and Data to Update  
                var result = collection2.Update(userObjectId, Update.Replace(collection), UpdateFlags.None);
                return RedirectToAction("Index");
            }
            catch
            {
                return View();
            }
        }

        // GET: User/Delete/5
        public ActionResult Delete(string id)
        {
            var document = _dbContext._database.GetCollection<UserModel>("usuario");

            var userDetailscount = document.FindAs<UserModel>(Query.EQ("_id", new ObjectId(id))).Count();

            if (userDetailscount > 0)
            {
                var userObjectid = Query<UserModel>.EQ(p => p.id, new ObjectId(id));

                var
                    userDetail = _dbContext._database.GetCollection<UserModel>("usuario").FindOne(userObjectid);

                return View(userDetail);
            }
            return RedirectToAction("Index");
        }

        // POST: User/Delete/5
        [HttpPost]
        public ActionResult Delete(string id, UserModel collection)
        {
            try
            {
                //Mongo Query  
                var userObjectid = Query<UserModel>.EQ(p => p.id, new ObjectId(id));
                // Document Collections  
                var collection2 = _dbContext._database.GetCollection<UserModel>("usuario");
                // Document Delete which need ObjectId to Delete Data   
                var result = collection2.Remove(userObjectid, RemoveFlags.Single);

                return RedirectToAction("Index");
            }
            catch
            {
                return View();
            }
        }
    }
}
