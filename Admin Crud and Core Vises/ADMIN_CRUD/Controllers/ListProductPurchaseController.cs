using ADMIN_CRUD.App_Start;
using ADMIN_CRUD.Models;
using MongoDB.Bson;
using MongoDB.Driver.Builders;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace ADMIN_CRUD.Controllers
{
    public class ListProductPurchaseController : Controller
    {


        MongoContext _dbContext;
        public ListProductPurchaseController()
        {
            _dbContext = new MongoContext();
        }
        // GET: ListProductPurchase
        public ActionResult Index()
        {
            var produxtDetails = _dbContext._database.GetCollection<ListPurchaseModel>("listaProductos").FindAll().ToList();
            return View(produxtDetails);
        }

        // GET: ListProductPurchase/Details/5
        public ActionResult Details(string id)
        {
            var productId = Query<ListPurchaseModel>.EQ(p => p.id, new ObjectId(id));
            var productDetails = _dbContext._database.GetCollection<ListPurchaseModel>("listaProductos").FindOne(productId);
            return View(productDetails); ;
        }

        // GET: ListProductPurchase/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: ListProductPurchase/Create
        [HttpPost]
        public ActionResult Create(FormCollection collection)
        {
            try
            {
                // TODO: Add insert logic here

                return RedirectToAction("Index");
            }
            catch
            {
                return View();
            }
        }

        // GET: ListProductPurchase/Edit/5
        public ActionResult Edit(int id)
        {
            return View();
        }

        // POST: ListProductPurchase/Edit/5
        [HttpPost]
        public ActionResult Edit(int id, FormCollection collection)
        {
            try
            {
                // TODO: Add update logic here

                return RedirectToAction("Index");
            }
            catch
            {
                return View();
            }
        }

        // GET: ListProductPurchase/Delete/5
        public ActionResult Delete(int id)
        {
            return View();
        }

        // POST: ListProductPurchase/Delete/5
        [HttpPost]
        public ActionResult Delete(int id, FormCollection collection)
        {
            try
            {
                // TODO: Add delete logic here

                return RedirectToAction("Index");
            }
            catch
            {
                return View();
            }
        }
    }
}
