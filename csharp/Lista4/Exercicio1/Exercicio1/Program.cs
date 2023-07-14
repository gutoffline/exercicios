using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercicio1
{
    class Program
    {
        static void Main(string[] args)
        {
            /*
            Construa um algoritmo que : 
            Leia a cotação do dólar 
            Leia um valor em dólares 
            Converta esse valor para Real 
            Mostre o resultado
            */

            Double cotacao, valorDolares, resultado;
            Console.WriteLine("Informe a cotação do Dólar");
            cotacao = Convert.ToDouble(Console.ReadLine());

            Console.WriteLine("Informe o valor em dólares");
            valorDolares = Convert.ToDouble(Console.ReadLine());

            resultado = cotacao * valorDolares;

            Console.WriteLine("O valor convertido é R$" + resultado );
        }
    }
}
