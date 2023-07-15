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
    public partial class frmFuncionarios : Form
    {
        public frmFuncionarios()
        {
            InitializeComponent();
        }

        private void btnSalvar_Click(object sender, EventArgs e)
        {
            string nome, estadoCivil;
            nome = txtNome.Text;
            if (rdbCasado.Checked == true)
            {
                estadoCivil = "Casado(a)";
            }else if(rdbSolteiro.Checked == true)
            {
                estadoCivil = "Solteiro(a)";
            }
            else
            {
                MessageBox.Show("Escolha um estado civil");
                return ;
            }
            SalvarFuncionario(nome, estadoCivil);
            LimparFuncionario();
        }

        private void SalvarFuncionario(string nome, string estadoCivil)
        {
            StreamWriter arquivo;
            string caminho = "C:\\sistema1\\funcionarios.txt";
            arquivo = File.AppendText(caminho);
            arquivo.WriteLine();
            arquivo.WriteLine("Cadastro de Funcionário");
            arquivo.WriteLine("Nome: " + nome);
            arquivo.WriteLine("Estado Civil: " + estadoCivil);
            arquivo.WriteLine("______________________________________________");
            arquivo.WriteLine();
            arquivo.Close();
            MessageBox.Show("Funcionário salvo com sucesso!!!", "Atenção!", MessageBoxButtons.OK, MessageBoxIcon.Information);
        }

        private void LimparFuncionario()
        {
            txtNome.Clear();
            rdbCasado.Checked = false;
            rdbSolteiro.Checked = false;
        }
    }
}
