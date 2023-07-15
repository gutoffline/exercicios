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

namespace JogoAdivinhacaoCerto
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void btnJogar_Click(object sender, EventArgs e)
       {
            int valorJogador = 0, valorComputador = 0;
            Random dados = new Random();
            valorComputador = dados.Next(1, 11);

            valorJogador = Convert.ToInt32(txtValor.Text);

            StreamWriter arquivo;
            string caminho = "C:\\teste\\placar.txt";
            arquivo = File.AppendText(caminho);

            if (valorJogador == valorComputador)
            {
                MessageBox.Show("Você acertou. Parabéns");
                lblTentativa.Text = "0";
                arquivo.Write(txtNome.Text);
                arquivo.WriteLine(" - GANHOU");
                arquivo.WriteLine();
                txtNome.Text = "";
                txtValor.Text = "";
            }
            else
            {
                MessageBox.Show("Você errou");
                lblTentativa.Text = (Convert.ToInt32(lblTentativa.Text) + 1).ToString();
            }

            if(lblTentativa.Text == "3")
            {
                MessageBox.Show("Jogo encerrado");
                lblTentativa.Text = "0";
                arquivo.Write(txtNome.Text);
                arquivo.WriteLine(" - PERDEU");
                arquivo.WriteLine();
                txtNome.Text = "";
                txtValor.Text = "";
            }

            arquivo.Close();
        }

        private void btnPlacar_Click(object sender, EventArgs e)
        {
            string Caminho = "C:\\teste\\placar.txt";
            System.Diagnostics.Process.Start("notepad", Caminho);
        }
    }
}
