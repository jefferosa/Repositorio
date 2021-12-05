package telas;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class TelaInicial implements ActionListener
{
    public TelaInicial() 
    {
        JFrame frame = new JFrame("Tela Inicial");
        frame.setVisible(true);
        frame.setSize(300, 300);
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setLayout(new FlowLayout());

        JButton button1 = new JButton("Eh Primo?");
        JButton button2 = new JButton("Calculadora");
        JButton button3 = new JButton("Verificar números");
        JButton button4 = new JButton("Inverter Texto");
        JButton button5 = new JButton("Triângulos");
        JButton button6 = new JButton("IMC");
        JButton button7 = new JButton("Jogo da Memória");

        frame.add(button1);
        frame.add(button2);
        frame.add(button3);
        frame.add(button4);
        frame.add(button5);
        frame.add(button6);
        frame.add(button7);

        setOnClickListener(button1);
        setOnClickListener(button2);
        setOnClickListener(button3);
        setOnClickListener(button4);
        setOnClickListener(button5);
        setOnClickListener(button6);
        setOnClickListener(button7);
    }

    private void setOnClickListener(JButton button) 
    {
        button.addActionListener(this);
    }

    @Override
    public void actionPerformed(ActionEvent e)
    {
        String action = e.getActionCommand();

        if (action == "Eh Primo?") 
            new TelaNumeroPrimo();
        else if (action == "Calculadora") 
            new TelaCalculadora();
        else if (action == "Verificar números") 
            new TelaNumeros();
        else if (action == "Inverter Texto") 
            new TelaInverterTexto();
        else if (action == "Triângulos")
            new TelaTriangulos();
        else if (action == "IMC")
            new TelaIMC();
        else if (action == "Jogo da Memória") 
        {
            try 
            {
                new TelaJogoDaMemoria();
            } 
            catch (InterruptedException ex) 
            {
                ex.printStackTrace();
            }
        }
    }
}
