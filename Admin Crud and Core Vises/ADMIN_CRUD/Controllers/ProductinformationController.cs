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
    public class ProductinformationController : Controller
    {
        MongoContext _dbContext;
        public ProductinformationController()
        {
            _dbContext = new MongoContext();
        }
        // GET: Productinformation
        public ActionResult Index()
        {
            var produxtDetails = _dbContext._database.GetCollection<ProductModel>("producto").FindAll().ToList();
            return View(produxtDetails);
        }

        // GET: Productinformation/Details/5
        public ActionResult Details(string id)
        {
            var productId = Query<ProductModel>.EQ(p => p.id, new ObjectId(id));
            var productDetails = _dbContext._database.GetCollection<ProductModel>("producto").FindOne(productId);
            return View(productDetails);
        }

        // GET: Productinformation/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: Productinformation/Create
        [HttpPost]
        public ActionResult Create(ProductModel collection)
        {
            try
            {
                var document = _dbContext._database.GetCollection<BsonDocument>("producto");
              
                var query = Query.And(Query.EQ("code", collection.code));

                var count = document.FindAs<ProductModel>(query).Count();

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

        // GET: Productinformation/Edit/5
        public ActionResult Edit(string id)
        {

            var document = _dbContext._database.GetCollection<ProductModel>("producto");

            var prDetailscount = document.FindAs<ProductModel>(Query.EQ("_id", new ObjectId(id))).Count();

            if (prDetailscount > 0)
            {
                var productObjectid = Query<ProductModel>.EQ(p => p.id, new ObjectId(id));

                var 
                    productrDetail = _dbContext._database.GetCollection<ProductModel>("producto").FindOne(productObjectid);

                return View(productrDetail);
            }
            return RedirectToAction("Index");
         
        }

        // POST: Productinformation/Edit/5
        [HttpPost]
        public ActionResult Edit(string id, ProductModel collection)
        {
            try
            {
                collection.id = new ObjectId(id);
                //Mongo Query  
                var prObjectId = Query<ProductModel>.EQ(p => p.id, new ObjectId(id));
                // Document Collections  
                var collection2 = _dbContext._database.GetCollection<ProductModel>("producto");
                // Document Update which need Id and Data to Update  
                var result = collection2.Update(prObjectId, Update.Replace(collection), UpdateFlags.None);
                return RedirectToAction("Index");
            }
            catch
            {
                return View();
            }
        }

        // GET: Productinformation/Delete/5
        public ActionResult Delete(string id)
        {
            var document = _dbContext._database.GetCollection<ProductModel>("producto");

            var prDetailscount = document.FindAs<ProductModel>(Query.EQ("_id", new ObjectId(id))).Count();

            if (prDetailscount > 0)
            {
                var productObjectid = Query<ProductModel>.EQ(p => p.id, new ObjectId(id));

                var
                    productrDetail = _dbContext._database.GetCollection<ProductModel>("producto").FindOne(productObjectid);

                return View(productrDetail);
            }
            return RedirectToAction("Index");

        }

        // POST: Productinformation/Delete/5
        [HttpPost]
        public ActionResult Delete(string id, ProductModel collection)
        {
            try
            {
                //Mongo Query  
                var carObjectid = Query<ProductModel>.EQ(p => p.id, new ObjectId(id));
                // Document Collections  
                var collection2 = _dbContext._database.GetCollection<ProductModel>("producto");
                // Document Delete which need ObjectId to Delete Data   
                var result = collection2.Remove(carObjectid, RemoveFlags.Single);

                return RedirectToAction("Index");
            }
            catch
            {
                return View();
            }
        }
    }
}
