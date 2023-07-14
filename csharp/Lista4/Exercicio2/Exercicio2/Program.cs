using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercicio2
{
    class Program
    {
        static void Main(string[] args)
        {
            /*
            Desenvolva um algoritmo que: 
            Leia 4 (quatro) números 
            Calcule o quadrado para cada um 
            Somem todos e 
            Mostre o resultado
            */

            int n1, n2, n3, n4, resultado;

            Console.WriteLine("Informe o 1º número");
            n1 = Convert.ToInt32(Console.ReadLine());

            Console.WriteLine("Informe o 2º número");
            n2 = Convert.ToInt32(Console.ReadLine());

            Console.WriteLine("Informe o 3º número");
            n3 = Convert.ToInt32(Console.ReadLine());

            Console.WriteLine("Informe o 4º número");
            n4 = Convert.ToInt32(Console.ReadLine());

            resultado = n1 * n1 + n2 * n2 + n3 * n3 + n4 * n4;
            Console.WriteLine("O resultado é: " + resultado);

            Console.ReadKey();
        }
    }
}
