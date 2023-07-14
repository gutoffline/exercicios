using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Cadastros
{
    public partial class frmClientes : Form
    {
        public frmClientes()
        {
            InitializeComponent();
        }

        private void btnSalvar_Click(object sender, EventArgs e)
        {
            string nome, cidade, telefone;
            nome = txtNome.Text;
            cidade = cmbCidade.Items[cmbCidade.SelectedIndex].ToString();
            telefone = maskTelefone.Text;
            SalvarCliente(nome, telefone, cidade);
            LimparCliente();
        }

        private void SalvarCliente(string nome, string telefone, string cidade)
        {
            StreamWriter arquivo;
            string caminho = "C:\\sistema1\\clientes.txt";
            arquivo = File.AppendText(caminho);
            arquivo.WriteLine();
            arquivo.WriteLine("Cadastro de Cliente");
            arquivo.WriteLine("Nome: " + nome);
            arquivo.WriteLine("Telefone: " + telefone);
            arquivo.WriteLine("Cidade: " + cidade);
            arquivo.WriteLine("______________________________________________");
            arquivo.WriteLine();
            arquivo.Close();
            MessageBox.Show("Cliente salvo com sucesso!!!","Atenção!", MessageBoxButtons.OK, MessageBoxIcon.Information);
        }

        private void LimparCliente()
        {
            txtNome.Clear();
            maskTelefone.Clear();
            cmbCidade.SelectedIndex = -1;
        }
    }
}
