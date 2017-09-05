using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(ADMIN_CRUD.Startup))]
namespace ADMIN_CRUD
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            ConfigureAuth(app);
        }
    }
}
