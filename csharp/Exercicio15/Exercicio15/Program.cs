using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercicio15
{
    class Program
    {
        static void Main(string[] args)
        {
            //Use a estrutura de repetição enquanto condição faz para mostrar uma contagem de números pares na tela.Essa contagem deve iniciar em 0 e terminar com um número previamente informado pelo usuário.

            int numero = 0;
            int contador = 0;
            Console.WriteLine("Informe um número");
            numero = Int32.Parse(Console.ReadLine());
            if(numero % 2 == 0)
            {
                Console.WriteLine("O número que você digitou é par. Vamos usar ele.");
            }
            else
            {
                numero++;
                Console.WriteLine("O número que você digitou é ímpar. Vamos usar esse " +numero + ".");
            }
            for(contador = 0; contador <= numero ; contador = contador + 2)
            {
                Console.WriteLine(contador);
            }
            Console.ReadKey();
        }
    }
}
