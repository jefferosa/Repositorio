package telas;

import interfaces.ButtonAction;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class TelaInverterTexto implements ActionListener, ButtonAction 
{
    JFrame frame;
    JTextField textField1;
    JTextField textField2;
    JLabel label;
    JButton button;

    TelaInverterTexto() 
    {
        frame = new JFrame("Inverter texto");
        frame.setVisible(true);
        frame.setSize(200, 150);
        frame.setDefaultCloseOperation(JFrame.DISPOSE_ON_CLOSE);
        frame.setLayout(new FlowLayout());

        criarComponentes();
        adicionarAoFrame();
    }

    private void criarComponentes() 
    {
        textField1 = new JTextField(10);
        textField2 = new JTextField(10);
        textField2.setEditable(false);

        label = new JLabel("Digite algo");
        button = new JButton("Inverter");

        setButtonClickListener(button);

    }

    private void adicionarAoFrame()
    {
        frame.add(label);
        frame.add(textField1);
        frame.add(textField2);
        frame.add(button);
    }

    @Override
    public void setButtonClickListener(JButton button) 
    {
        button.addActionListener(this);
    }

    @Override
    public void actionPerformed(ActionEvent e)
    {
        String texto = textField1.getText();
        String textoInvertido = "";
        int tamanho = texto.length() - 1;

        for (int i = tamanho; i >= 0; i--)
            textoInvertido += texto.charAt(i);

        textField2.setText(textoInvertido);
    }
}
