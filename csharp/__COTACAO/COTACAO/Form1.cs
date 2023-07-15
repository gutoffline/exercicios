using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace COTACAO
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            int tipomoeda = 0;
            if (cmbMoedas.Items[cmbMoedas.SelectedIndex].ToString() == "Dólar(venda)")
                tipomoeda = 1;
            if (cmbMoedas.Items[cmbMoedas.SelectedIndex].ToString() == "Dólar (compra)")
                tipomoeda = 10813;
            if (cmbMoedas.Items[cmbMoedas.SelectedIndex].ToString() == "Euro (venda)")
                tipomoeda = 21619;
            if (cmbMoedas.Items[cmbMoedas.SelectedIndex].ToString() == "Euro (compra)")
                tipomoeda = 21620;
            if (cmbMoedas.Items[cmbMoedas.SelectedIndex].ToString() == "Iene (venda)")
                tipomoeda = 21621;
            if (cmbMoedas.Items[cmbMoedas.SelectedIndex].ToString() == "Iene (compra)")
                tipomoeda = 21622;
            if (cmbMoedas.Items[cmbMoedas.SelectedIndex].ToString() == "Dólar Canadense (venda)")
                tipomoeda = 21635;
            if (cmbMoedas.Items[cmbMoedas.SelectedIndex].ToString() == "Dólar Canadense (compra)")
                tipomoeda = 21636;

            Cotar(tipomoeda);
        }

        private void Cotar(int tipoMoeda)
        {
            //https://www3.bcb.gov.br/sgspub/JSP/sgsgeral/FachadaWSSGS.wsdl

            var service = new Moeda.FachadaWSSGSClient();
            var cotacao = service.getUltimoValorVO(tipoMoeda);
            string valor = (cotacao.ultimoValor.svalor).ToString();
            txtValor.Text = valor;
        }
    }
}
