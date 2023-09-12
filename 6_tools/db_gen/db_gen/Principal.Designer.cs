namespace nMorph.framework.orm.db_gen
{
    partial class Principal
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
            this.btn_Generate = new System.Windows.Forms.Button();
            this.txt_ConnString = new System.Windows.Forms.TextBox();
            this.lbl_ConnString = new System.Windows.Forms.Label();
            this.SuspendLayout();
            // 
            // btn_Generate
            // 
            this.btn_Generate.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Bottom | System.Windows.Forms.AnchorStyles.Right)));
            this.btn_Generate.Location = new System.Drawing.Point(20, 276);
            this.btn_Generate.Margin = new System.Windows.Forms.Padding(2);
            this.btn_Generate.Name = "btn_Generate";
            this.btn_Generate.Size = new System.Drawing.Size(191, 70);
            this.btn_Generate.TabIndex = 0;
            this.btn_Generate.Text = "Generar";
            this.btn_Generate.UseVisualStyleBackColor = true;
            this.btn_Generate.Click += new System.EventHandler(this.btn_Generate_Click);
            // 
            // txt_ConnString
            // 
            this.txt_ConnString.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.txt_ConnString.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txt_ConnString.Location = new System.Drawing.Point(20, 61);
            this.txt_ConnString.Margin = new System.Windows.Forms.Padding(2);
            this.txt_ConnString.Multiline = true;
            this.txt_ConnString.Name = "txt_ConnString";
            this.txt_ConnString.Size = new System.Drawing.Size(1198, 190);
            this.txt_ConnString.TabIndex = 1;
            this.txt_ConnString.Text = "Data Source=DEV; Initial Catalog=SW_TodoList;User ID=DevExternal;Password=3jWZuMr" +
    "6Z83cy2spSy3g;";
            // 
            // lbl_ConnString
            // 
            this.lbl_ConnString.AutoSize = true;
            this.lbl_ConnString.Location = new System.Drawing.Point(26, 20);
            this.lbl_ConnString.Margin = new System.Windows.Forms.Padding(2, 0, 2, 0);
            this.lbl_ConnString.Name = "lbl_ConnString";
            this.lbl_ConnString.Size = new System.Drawing.Size(168, 25);
            this.lbl_ConnString.TabIndex = 2;
            this.lbl_ConnString.Text = "Connection String";
            // 
            // Principal
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(11F, 24F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(1302, 486);
            this.Controls.Add(this.lbl_ConnString);
            this.Controls.Add(this.txt_ConnString);
            this.Controls.Add(this.btn_Generate);
            this.Margin = new System.Windows.Forms.Padding(2);
            this.Name = "Principal";
            this.Text = "db_gen";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button btn_Generate;
        private System.Windows.Forms.TextBox txt_ConnString;
        private System.Windows.Forms.Label lbl_ConnString;
    }
}

