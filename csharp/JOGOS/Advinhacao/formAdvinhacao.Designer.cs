namespace Advinhacao
{
    partial class formAdvinhacao
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.btnSortear = new System.Windows.Forms.Button();
            this.imgPokemon3 = new System.Windows.Forms.PictureBox();
            this.imgPokemon2 = new System.Windows.Forms.PictureBox();
            this.imgPokemon1 = new System.Windows.Forms.PictureBox();
            ((System.ComponentModel.ISupportInitialize)(this.imgPokemon3)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.imgPokemon2)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.imgPokemon1)).BeginInit();
            this.SuspendLayout();
            // 
            // btnSortear
            // 
            this.btnSortear.Location = new System.Drawing.Point(175, 180);
            this.btnSortear.Name = "btnSortear";
            this.btnSortear.Size = new System.Drawing.Size(106, 50);
            this.btnSortear.TabIndex = 0;
            this.btnSortear.Text = "SORTEAR";
            this.btnSortear.UseVisualStyleBackColor = true;
            this.btnSortear.Click += new System.EventHandler(this.btnSortear_Click);
            // 
            // imgPokemon3
            // 
            this.imgPokemon3.Image = global::Advinhacao.Properties.Resources.iconfinder_p_09_877803;
            this.imgPokemon3.Location = new System.Drawing.Point(327, 12);
            this.imgPokemon3.Name = "imgPokemon3";
            this.imgPokemon3.Size = new System.Drawing.Size(96, 130);
            this.imgPokemon3.SizeMode = System.Windows.Forms.PictureBoxSizeMode.Zoom;
            this.imgPokemon3.TabIndex = 3;
            this.imgPokemon3.TabStop = false;
            // 
            // imgPokemon2
            // 
            this.imgPokemon2.Image = global::Advinhacao.Properties.Resources.iconfinder_p_06_877909;
            this.imgPokemon2.Location = new System.Drawing.Point(175, 12);
            this.imgPokemon2.Name = "imgPokemon2";
            this.imgPokemon2.Size = new System.Drawing.Size(106, 130);
            this.imgPokemon2.SizeMode = System.Windows.Forms.PictureBoxSizeMode.Zoom;
            this.imgPokemon2.TabIndex = 2;
            this.imgPokemon2.TabStop = false;
            // 
            // imgPokemon1
            // 
            this.imgPokemon1.Image = global::Advinhacao.Properties.Resources.iconfinder_p_03_877911;
            this.imgPokemon1.Location = new System.Drawing.Point(40, 12);
            this.imgPokemon1.Name = "imgPokemon1";
            this.imgPokemon1.Size = new System.Drawing.Size(97, 130);
            this.imgPokemon1.SizeMode = System.Windows.Forms.PictureBoxSizeMode.Zoom;
            this.imgPokemon1.TabIndex = 1;
            this.imgPokemon1.TabStop = false;
            // 
            // formAdvinhacao
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(438, 258);
            this.Controls.Add(this.imgPokemon3);
            this.Controls.Add(this.imgPokemon2);
            this.Controls.Add(this.imgPokemon1);
            this.Controls.Add(this.btnSortear);
            this.Name = "formAdvinhacao";
            this.Text = "formAdvinhacao";
            ((System.ComponentModel.ISupportInitialize)(this.imgPokemon3)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.imgPokemon2)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.imgPokemon1)).EndInit();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Button btnSortear;
        private System.Windows.Forms.PictureBox imgPokemon1;
        private System.Windows.Forms.PictureBox imgPokemon2;
        private System.Windows.Forms.PictureBox imgPokemon3;
    }
}