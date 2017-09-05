using System;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.Serialization;
using System.ServiceModel;
using System.ServiceModel.Web;
using System.Text;

namespace WcfService
{
    // NOTE: You can use the "Rename" command on the "Refactor" menu to change the interface name "IService1" in both code and config file together.
    [ServiceContract]
    public interface IWSpgos
    {

        [OperationContract]
        Pago pagoMatricula(String usuario, String Contrasena);

    }

    [DataContract]
    public class Pago :BaseRepuesta
    {
        [DataMember]
        public String nombre{ get; set; }
        [DataMember]
        public int monto { get; set; }
    }
    [DataContract]
    public class BaseRepuesta
    {
        [DataMember]
        public String mensaje { get; set; }
    }

}
