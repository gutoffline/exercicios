using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace RestoDaDivisao
{
    public partial class frmRestoDeDivisao : Form
    {
        public frmRestoDeDivisao()
        {
            InitializeComponent();
        }

        private void btnCalculo_Click(object sender, EventArgs e)
        {
            int dividendo = Convert.ToInt32(txtDividendo.Text);
            int divisor = Convert.ToInt32(txtDivisor.Text);
            int resto = dividendo % divisor;
            txtResto.Text = resto.ToString();
            MessageBox.Show("Cálculo realizado com sucesso!", "Deu BOM!!!", MessageBoxButtons.OK, MessageBoxIcon.Exclamation);
        }
    }
}
