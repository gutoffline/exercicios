using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercicio5
{
    class Program
    {
        static void Main(string[] args)
        {
            //Efetuar a leitura de um valor numérico inteiro e apresentar o resultado do valor lido elevado ao quadrado.

            int numero, quadrado;
            Console.WriteLine("Informe um número");
            numero = Convert.ToInt32(Console.ReadLine());

            quadrado = numero * numero;

            Console.WriteLine("O quadrado do numero informado é " + quadrado);

            Console.ReadKey();
        }
    }
}
