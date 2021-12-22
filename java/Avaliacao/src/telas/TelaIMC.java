package telas;

import interfaces.ButtonAction;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class TelaIMC implements ActionListener, ButtonAction 
{
    JFrame frame;
    JLabel label, label2, labelImage, labelInfo;
    JTextField textField, textField2;
    JButton btnCalcular;

    TelaIMC() 
    {
        frame = new JFrame("IMC");
        frame.setVisible(true);
        frame.setSize(350, 450);
        frame.setDefaultCloseOperation(JFrame.DISPOSE_ON_CLOSE);
        frame.setLayout(new FlowLayout());

        criarComponentes();
        adicionarAoFrame();
    }

    private void criarComponentes() 
    {
        label = new JLabel("Altura (cm)");
        label2 = new JLabel("Peso (kg)");
        labelInfo = new JLabel();
        labelImage = new JLabel(new ImageIcon("src/recursos/imc.jpg"));

        textField = new JTextField(5);
        textField2 = new JTextField(5);

        btnCalcular = new JButton("Calcular");

        setButtonClickListener(btnCalcular);
    }

    private void adicionarAoFrame() 
    {
        frame.add(label);
        frame.add(textField);
        frame.add(label2);
        frame.add(textField2);
        frame.add(btnCalcular);
        frame.add(labelInfo);
        frame.add(labelImage);
    }

    private boolean verificarCampos() 
    {
        return !textField.getText().equals("") && !textField2.getText().equals("");
    }

    private void calcularIMC() 
    {
        if (verificarCampos()) 
        {
            Float imc;
            Float altura = Float.parseFloat(textField.getText()) / 100;
            Float peso = Float.parseFloat(textField2.getText());

            imc = peso / (altura * altura);
            labelInfo.setText("IMC: " + imc);
            if (imc < 17)
                labelImage.setIcon(new ImageIcon("src/recursos/imc01.jpg"));
            else if (imc >= 17 && imc <= 18.49)
                labelImage.setIcon(new ImageIcon("src/recursos/imc02.jpg"));
            else if (imc >= 18.50 && imc <= 24.99)
                labelImage.setIcon(new ImageIcon("src/recursos/imc03.jpg"));
            else if (imc >= 25 && imc <= 29.99)
                labelImage.setIcon(new ImageIcon("src/recursos/imc04.jpg"));
            else if (imc >= 30 && imc <= 34.99)
                labelImage.setIcon(new ImageIcon("src/recursos/imc05.jpg"));
            else if (imc >= 35 && imc <= 39.99)
                labelImage.setIcon(new ImageIcon("src/recursos/imc06.jpg"));
            else
                labelImage.setIcon(new ImageIcon("src/recursos/imc07.jpg"));
        }
        else
            labelInfo.setText("Informe os valores");
    }


    @Override
    public void setButtonClickListener(JButton button)
    {
        button.addActionListener(this);
    }

    @Override
    public void actionPerformed(ActionEvent e)
    {
        String action = e.getActionCommand();

        switch (action)
        {
            case "Calcular":
                calcularIMC();
        }
    }
}
