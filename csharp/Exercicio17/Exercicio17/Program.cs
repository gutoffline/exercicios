using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercicio17
{
    class Program
    {
        static void Main(string[] args)
        {

            //Faça um algoritmo que mostre na tela todos os números entre 1 e 10.

            int numero = 1;

            while(numero <= 10)
            {
                Console.WriteLine(numero);
                numero = numero + 1;
            }


            numero = 1;
            do
            {
                Console.WriteLine(numero);
                numero++;
            } while (numero <=10);


            for (numero = 1; numero <= 10; numero++)
            {
                Console.WriteLine(numero);
            }
            Console.ReadKey();
        }
    }
}
