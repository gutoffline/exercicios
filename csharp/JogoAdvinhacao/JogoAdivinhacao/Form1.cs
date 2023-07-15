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

namespace JogoAdivinhacao
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void btnJogar_Click(object sender, EventArgs e)
        {
            int numeroJogador = 0, numeroComputador = 0, total;
            string nome = txtNome.Text;
            Random dado = new Random();
            numeroComputador = dado.Next(0, 11);

            numeroJogador = Convert.ToInt32(txtValor.Text);
            total = (numeroComputador + numeroJogador);
            MessageBox.Show("Seu número: " + txtValor.Text + "\nNúmero do computador:  " + numeroComputador.ToString() + "\nTotal: " + total.ToString());

            if (rdbImpar.Checked == true){
                if(total % 2 != 0){
                    MessageBox.Show("Você escolheu ímpar. Parabéns "+ nome +", você ganhou!");
                }else{
                    MessageBox.Show("Você escolheu ímpar. " + nome + ", você perdeu!");
                }
            }else{
                if(total % 2 == 0){
                    MessageBox.Show("Você escolheu par. Parabéns " + nome + ", você ganhou!");
                }else{
                    MessageBox.Show("Você escolheu par. " + nome + ", você perdeu!");
                }
            }
        }
    }
}
