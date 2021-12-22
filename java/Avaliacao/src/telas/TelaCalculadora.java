package telas;

import interfaces.ButtonAction;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class TelaCalculadora implements ActionListener, ButtonAction 
{
    JLabel label;
    JLabel labelResultado;
    JButton btnSomar;
    JButton btnSubtrair;
    JButton btnMultiplicar;
    JButton btnDividir;
    JTextField txtNum1;
    JTextField txtNum2;
    JFrame frame;

    TelaCalculadora() 
    {
        frame = new JFrame("Operações Matemáticas");
        frame.setVisible(true);
        frame.setSize(450, 200);
        frame.setDefaultCloseOperation(JFrame.DISPOSE_ON_CLOSE);
        frame.setLayout(new FlowLayout());

        configurarItens();
        addItemsToFrame();
    }

    private void addItemsToFrame()
    {
        frame.add(label);
        frame.add(txtNum1);
        frame.add(txtNum2);
        frame.add(btnSomar);
        frame.add(btnSubtrair);
        frame.add(btnMultiplicar);
        frame.add(btnDividir);
        frame.add(labelResultado);
    }

    private void configurarItens() 
    {

        btnSomar       = new JButton();
        btnMultiplicar = new JButton();
        btnSubtrair    = new JButton();
        btnDividir     = new JButton();

        btnSomar.setText("Somar");
        btnMultiplicar.setText("Multiplicar");
        btnSubtrair.setText("Subtrair");
        btnDividir.setText("Dividir");

        setButtonClickListener(btnSomar);
        setButtonClickListener(btnSubtrair);
        setButtonClickListener(btnMultiplicar);
        setButtonClickListener(btnDividir);

        label = new JLabel();
        labelResultado = new JLabel();
        label.setText("Digite dois números");

        txtNum1 = new JTextField(10);
        txtNum2 = new JTextField(10);
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
        
        if(verificarCampos())
        {
            int num1 = Integer.parseInt(txtNum1.getText());
            int num2 = Integer.parseInt(txtNum2.getText());

            switch (action)
            {
                case "Somar" : 
                    labelResultado.setText(num1 + " + " + num2 + " = " + (num1 + num2));
                    break;
                
                case "Subtrair" :
                    labelResultado.setText(num1 + " - " + num2 + " = " + (num1 - num2));
                    break;
                
                case "Multiplicar" :
                    labelResultado.setText(num1 + " * " + num2 + " = " + (num1 * num2));
                    break;

                case "Dividir" :
                {
                    int resultado;
                    
                    try
                    {
                        resultado = num1 / num2;
                        labelResultado.setText(num1 + " / " + num2 + " = " + resultado);
                    } 
                    catch (Exception exception) 
                    {
                        labelResultado.setText("Não foi possível realizar a divisão");
                    }
                    
                    break;
                }
                default: 
                    break;
            }
        }
        else 
            labelResultado.setText("Digite os dois números para realizar a operação");
    }

    private boolean verificarCampos()
    {
        return txtNum1.getText().length() > 0 && txtNum2.getText().length() > 0;
    }
}
