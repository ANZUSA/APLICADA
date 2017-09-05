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
    public class PurchasesController : Controller
    {

        MongoContext _dbContext;
        public PurchasesController()
        {
            _dbContext = new MongoContext();
        }
        // GET: Purchases
        public ActionResult Index()
        {
            var purchasesDetails = _dbContext._database.GetCollection<Purchases>("compra").FindAll().ToList();
            return View(purchasesDetails);
        }

        // GET: Purchases/Details/5
        public ActionResult Details(string id)
        {
            
       var purchasesDetails = _dbContext._database.GetCollection<ListPurchaseModel>("listaProductos").Find(Query<ListPurchaseModel>.EQ(p => p.idCompra, id)).ToList();


            return View(purchasesDetails);
          

        }

        // GET: Purchases/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: Purchases/Create
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

        // GET: Purchases/Edit/5
        public ActionResult Edit(int id)
        {
            return View();
        }

        // POST: Purchases/Edit/5
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

        // GET: Purchases/Delete/5
        public ActionResult Delete(int id)
        {
            return View();
        }

        // POST: Purchases/Delete/5
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
