namespace COTACAO
{
    partial class Form1
    {
        /// <summary>
        /// Variável de designer necessária.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Limpar os recursos que estão sendo usados.
        /// </summary>
        /// <param name="disposing">true se for necessário descartar os recursos gerenciados; caso contrário, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Código gerado pelo Windows Form Designer

        /// <summary>
        /// Método necessário para suporte ao Designer - não modifique 
        /// o conteúdo deste método com o editor de código.
        /// </summary>
        private void InitializeComponent()
        {
            this.txtCotacao = new System.Windows.Forms.Button();
            this.label1 = new System.Windows.Forms.Label();
            this.cmbMoedas = new System.Windows.Forms.ComboBox();
            this.label2 = new System.Windows.Forms.Label();
            this.txtValor = new System.Windows.Forms.TextBox();
            this.SuspendLayout();
            // 
            // txtCotacao
            // 
            this.txtCotacao.Location = new System.Drawing.Point(45, 164);
            this.txtCotacao.Name = "txtCotacao";
            this.txtCotacao.Size = new System.Drawing.Size(251, 57);
            this.txtCotacao.TabIndex = 0;
            this.txtCotacao.Text = "COTAÇÃO";
            this.txtCotacao.UseVisualStyleBackColor = true;
            this.txtCotacao.Click += new System.EventHandler(this.button1_Click);
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(42, 77);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(49, 13);
            this.label1.TabIndex = 1;
            this.label1.Text = "MOEDA:";
            // 
            // cmbMoedas
            // 
            this.cmbMoedas.FormattingEnabled = true;
            this.cmbMoedas.Items.AddRange(new object[] {
            "Dólar (venda)",
            "Dólar (compra)",
            "Euro (venda)",
            "Euro (compra)",
            "Iene (venda)",
            "Iene (compra)",
            "Dólar Canadense (venda)",
            "Dólar Canadense (compra)"});
            this.cmbMoedas.Location = new System.Drawing.Point(45, 104);
            this.cmbMoedas.Name = "cmbMoedas";
            this.cmbMoedas.Size = new System.Drawing.Size(121, 21);
            this.cmbMoedas.TabIndex = 2;
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(193, 77);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(46, 13);
            this.label2.TabIndex = 3;
            this.label2.Text = "VALOR:";
            // 
            // txtValor
            // 
            this.txtValor.Location = new System.Drawing.Point(196, 105);
            this.txtValor.Name = "txtValor";
            this.txtValor.Size = new System.Drawing.Size(100, 20);
            this.txtValor.TabIndex = 4;
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(347, 272);
            this.Controls.Add(this.txtValor);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.cmbMoedas);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.txtCotacao);
            this.Name = "Form1";
            this.Text = "Form1";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button txtCotacao;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.ComboBox cmbMoedas;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.TextBox txtValor;
    }
}

