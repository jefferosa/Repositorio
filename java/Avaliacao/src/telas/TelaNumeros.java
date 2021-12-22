package telas;

import interfaces.ButtonAction;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.util.ArrayList;

public class TelaNumeros implements ActionListener, ButtonAction
{
    JTextField textField;
    JButton btnAdicionar;
    JButton btnCalcular;
    JLabel labelInfo;
    JLabel labelMaior;
    JLabel labelMenor;
    JLabel labelMedia;
    JFrame frame;

    JTextField txtFieldMaior;
    JTextField txtFieldMenor;
    JTextField txtFieldMedia;

    ArrayList<Integer> numeros;

    TelaNumeros()
    {
        frame = new JFrame("Números");
        frame.setVisible(true);
        frame.setSize(140, 310);
        frame.setDefaultCloseOperation(JFrame.DISPOSE_ON_CLOSE);
        frame.setLayout(new FlowLayout());

        criarComponentes();
        adicionarAoFrame();

        numeros = new ArrayList<>();
    }

    private void criarComponentes()
    {
        textField = new JTextField(10);
        txtFieldMaior = new JTextField(10);
        txtFieldMenor = new JTextField(10);
        txtFieldMedia = new JTextField(10);

        txtFieldMaior.setEditable(false);
        txtFieldMenor.setEditable(false);
        txtFieldMedia.setEditable(false);

        labelInfo = new JLabel("Digite os números");
        labelMaior = new JLabel("Maior");
        labelMedia = new JLabel("Média");
        labelMenor = new JLabel("Menor");

        btnAdicionar = new JButton("Adicionar");
        btnCalcular = new JButton("Calcular");

        setButtonClickListener(btnAdicionar);
        setButtonClickListener(btnCalcular);
    }

    private void adicionarAoFrame()
    {
        frame.add(labelInfo);
        frame.add(textField);
        frame.add(btnAdicionar);

        frame.add(labelMaior);
        frame.add(txtFieldMaior);

        frame.add(labelMenor);
        frame.add(txtFieldMenor);

        frame.add(labelMedia);
        frame.add(txtFieldMedia);

        frame.add(btnCalcular);
    }


    @Override
    public void setButtonClickListener(JButton button) 
    {
        button.addActionListener(this);
    }

    private void adicionarNumero(int numero)
    {
        numeros.add(numero);
        textField.setText("");
    }
    
    private void calcular()
    {
        int maior = 0;
        int menor = 0;
        int media = 0;
        
        if (numeros.size() > 0)
        {
            maior = numeros.get(0);
            menor = numeros.get(0);

            for (int i = 0; i < numeros.size(); i++)
            {
                if (numeros.get(i) > maior)
                    maior = numeros.get(i);

                if (numeros.get(i) < menor)
                    menor = numeros.get(i);

                media += numeros.get(i);
            }

            media = media / numeros.size();

            txtFieldMaior.setText(String.valueOf(maior));
            txtFieldMenor.setText(String.valueOf(menor));
            txtFieldMedia.setText(String.valueOf(media));

            numeros.clear();
        }
    }

    @Override
    public void actionPerformed(ActionEvent e)
    {
        String action = e.getActionCommand();

        switch (action)
        {
            case "Adicionar" : 
                adicionarNumero(Integer.parseInt(textField.getText()));
                break;

            case "Calcular" : 
                calcular();
                break;
        }
    }
}
