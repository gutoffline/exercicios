using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercicio4
{
    class Program
    {
        static void Main(string[] args)
        {
            //Desenvolva um Algoritmo que lê o nome e as 4 notas bimestrais de um aluno. Em seguida o Algoritmo calcula e escreve a média obtida.
            string nome;
            double nota = 0, media;
            int contador = 1;

            Console.WriteLine("Informe o nome");
            nome = Console.ReadLine();
            while(contador <= 4)
            {
                Console.WriteLine("Informe a " + contador + " ª nota");
                nota += Convert.ToDouble(Console.ReadLine());
                contador++;
            }
            media = nota / 4;
            Console.WriteLine("A média do(a) " + nome + " é " + media);
            Console.ReadKey();
        }
    }
}
