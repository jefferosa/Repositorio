package telas;

import interfaces.ButtonAction;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class TelaTriangulos implements ActionListener, ButtonAction 
{
    JFrame frame;
    JLabel labelLado1;
    JLabel labelLado2;
    JLabel labelLado3;
    JLabel labelInfo;
    JTextField textField1;
    JTextField textField2;
    JTextField textField3;
    JButton btnVerificar;
    JButton btnLimpar;
    ImageIcon imageIcon;
    JLabel labelImage;

    TelaTriangulos()
    {
        frame = new JFrame("Triângulos");
        frame.setVisible(true);
        frame.setSize(220, 380);
        frame.setDefaultCloseOperation(JFrame.DISPOSE_ON_CLOSE);
        frame.setLayout(new FlowLayout());

        criarComponentes();
        adicionarAoFrame();
    }

    private void criarComponentes() 
    {
        labelLado1 = new JLabel("Lado 1:");
        labelLado2 = new JLabel("Lado 2:");
        labelLado3 = new JLabel("Lado 3:");
        labelInfo = new JLabel();
        labelImage = new JLabel();
        labelImage.setIcon(new ImageIcon("src/recursos/tri.jpg"));

        btnVerificar = new JButton("Verificar");
        btnLimpar = new JButton("Limpar");

        setButtonClickListener(btnVerificar);
        setButtonClickListener(btnLimpar);

        textField1 = new JTextField(10);
        textField2 = new JTextField(10);
        textField3 = new JTextField(10);
    }

    private void adicionarAoFrame() 
    {
        frame.add(labelLado1);
        frame.add(textField1);
        frame.add(labelLado2);
        frame.add(textField2);
        frame.add(labelLado3);
        frame.add(textField3);

        frame.add(btnVerificar);
        frame.add(btnLimpar);

        frame.add(labelInfo);
        frame.add(labelImage);
    }

    private boolean verificarCampos() 
    {
        return !textField1.getText().equals("") && !textField2.getText().equals("") && !textField3.getText().equals("");
    }

    private void verificarTriangulo()
    {
        if (verificarCampos()) 
        {
            int lado1 = Integer.parseInt(textField1.getText());
            int lado2 = Integer.parseInt(textField2.getText());
            int lado3 = Integer.parseInt(textField3.getText());

            if (isValidTriangle()) 
            {
                if (lado1 == lado2 && lado2 == lado3)
                {
                    labelImage.setIcon(new ImageIcon("src/recursos/tri-equilatero.jpg"));
                    labelInfo.setText("Triângulos Equilátero");
                } 
                else if (lado1 == lado2 || lado1 == lado3 || lado2 == lado3)
                {
                    labelImage.setIcon(new ImageIcon("src/recursos/tri-isoceles.jpg"));
                    labelInfo.setText("Triângulos Isósceles");
                } 
                else if (lado1 != lado2)
                {
                    labelImage.setIcon(new ImageIcon("src/recursos/tri-escaleno.jpg"));
                    labelInfo.setText("Triângulo Escaleno");
                }
            } 
            else 
            {
                labelImage.setIcon(new ImageIcon("src/recursos/erro.png"));
                labelInfo.setText("Triângulo Inválido");
            }
        } 
        else 
        {
            labelImage.setIcon(new ImageIcon("src/recursos/erro.png"));
            labelInfo.setText("Digite todos os valores");
        }
    }

    public boolean isValidTriangle() 
    {
        int lado1 = Integer.parseInt(textField1.getText());
        int lado2 = Integer.parseInt(textField2.getText());
        int lado3 = Integer.parseInt(textField3.getText());

        return (lado1 + lado2) > lado3 && (lado2 + lado3) > lado1 && (lado1 + lado3) > lado2;
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
            case "Verificar": 
                verificarTriangulo();
                break;

            case "Limpar":
            {
                textField1.setText("");
                textField2.setText("");
                textField3.setText("");
            }
        }
    }
}
