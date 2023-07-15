using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace BuscarCEP
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void btnBuscarCep_Click(object sender, EventArgs e)
        {
            string enderecoCompleto = "";

            try
            {
                var webService = new CORREIOS.AtendeClienteClient();
                var resposta = webService.consultaCEP(txtCep.Text);
                enderecoCompleto += "Endereço: " + resposta.end;
                enderecoCompleto += "\nBairro: " + resposta.bairro;
                enderecoCompleto += "\nCidade: " + resposta.cidade;
                enderecoCompleto += "\nEstado: " + resposta.uf;
                MessageBox.Show(enderecoCompleto);
            }
            catch (Exception ex)
            {
                MessageBox.Show("Esse CEP não foi encontrado");
            }
        }
    }
}
