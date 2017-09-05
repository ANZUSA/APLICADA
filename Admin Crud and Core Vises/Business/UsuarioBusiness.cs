using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

//agregamos el DLL de DATA y del Domain
using Data;
using Domain;

namespace Business
{
    public class UsuarioBusiness
    {
            
        //constructor
        public UsuarioBusiness() {
        }

        public static string insertUserData(string userName, string lastName, string email, string pass)
        {

            return UsuarioData.insertUserData(userName,lastName,email,pass);
        }
        public static string loginUser(string userName, string pass)
        {
            return UsuarioData.loginUser(userName,pass);
        }

        public static string existUser(string userName)
        {
            return UsuarioData.existUser(userName);

        }
    }
    }
