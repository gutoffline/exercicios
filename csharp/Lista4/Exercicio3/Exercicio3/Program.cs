using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercicio3
{
    class Program
    {
        static void Main(string[] args)
        {
            /*
            Construa um algoritmo para pagamento de comissão de vendedores de peças automotivas, levando em consideração que a comissão do vendedor será de 5% do total da venda. O usuário deve inserir os seguintes dados abaixo, e ao final o sistema deve mostrar o valor total da compra e o valor da comissão do vendedor: 
            Identificação do vendedor 
            Código da peça 
            Preço unitário da peça 
            Quantidade vendida              
             */

            string identificacao, codigoPeca;
            int quantidade;
            double precoUnitario, valorTotal, comissao;

            Console.WriteLine("Informe a identificação do vendedor");
            identificacao = Console.ReadLine();

            Console.WriteLine("Informe o código da peça");
            codigoPeca = Console.ReadLine();

            Console.WriteLine("Informe a quantidade vendida");
            quantidade = Convert.ToInt32(Console.ReadLine());

            Console.WriteLine("Informe o preço unitário da peça");
            precoUnitario = Convert.ToDouble(Console.ReadLine());

            valorTotal = precoUnitario * quantidade;
            comissao = valorTotal * 0.05;

            Console.WriteLine("O valor total é " + valorTotal + "\n e a comissão é " + comissao);
            Console.ReadKey();
        }
    }
}
