package telas;

import interfaces.ButtonAction;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class TelaNumeroPrimo implements ActionListener, ButtonAction 
{
    JLabel label, label2;
    JTextField textField;

    public TelaNumeroPrimo() 
    {
        JFrame frame = new JFrame("Eh Primo?");
        frame.setVisible(true);
        frame.setSize(400, 110);
        frame.setDefaultCloseOperation(JFrame.DISPOSE_ON_CLOSE);
        frame.setLayout(new FlowLayout());

        label = new JLabel("Digite um número");
        frame.add(label);

        textField = new JTextField(10);
        frame.add(textField);

        JButton button = new JButton();
        button.setText("Verificar");
        setButtonClickListener(button);
        frame.add(button);

        label2 = new JLabel();
        frame.add(label2);
    }

    @Override
    public void actionPerformed(ActionEvent e) 
    {
        boolean ehPrimo;

        if (e.getActionCommand().equalsIgnoreCase("Verificar")) 
        {
            ehPrimo = verificarNumeroPrimo(Integer.parseInt(textField.getText()));
            
            if (ehPrimo) 
                label2.setText("O número " + textField.getText() + " é primo!");
            else 
                label2.setText("O número " + textField.getText() + " não é primo!");
        }
        
        textField.setText("");
    }

    @Override
    public void setButtonClickListener(JButton button) 
    {
        button.addActionListener(this);
    }

    private boolean verificarNumeroPrimo(int numero) 
    {
        for (int i = 2; i < numero; i++) 
        {
            if (numero % i == 0)
                return false;
        }
        
        return true;
    }
}
