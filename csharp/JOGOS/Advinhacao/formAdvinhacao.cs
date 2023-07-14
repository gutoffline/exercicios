using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Advinhacao
{
    public partial class formAdvinhacao : Form
    {
        public formAdvinhacao()
        {
            InitializeComponent();
        }

        private void btnSortear_Click(object sender, EventArgs e)
        {
            Random dado = new Random();
            int valor;

            valor = dado.Next(1, 4);

            if(valor == 1)
            {
                imgPokemon1.Visible = true;
                imgPokemon2.Visible = false;
                imgPokemon3.Visible = false;
            }

            if (valor == 2)
            {
                imgPokemon1.Visible = false;
                imgPokemon2.Visible = true;
                imgPokemon3.Visible = false;
            }

            if (valor == 3)
            {
                imgPokemon1.Visible = false;
                imgPokemon2.Visible = false;
                imgPokemon3.Visible = true;
            }
        }
    }
}
