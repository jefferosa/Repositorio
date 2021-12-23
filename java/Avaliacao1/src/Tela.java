import javax.swing.ButtonGroup;
import javax.swing.JButton;
import javax.swing.JCheckBox;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JRadioButton;
import javax.swing.JScrollPane;
import javax.swing.JTextArea;
import javax.swing.JTextField;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class Tela implements ActionListener
{
    JLabel label, labelNome, labelEndereco, labelCidade, labelSexo, labelCurso;
	JTextField textFieldNome, textFieldEndereco, textFieldCidade;
	JRadioButton radioButtonMasculino, radioButtonFeminino;
	JCheckBox chkCurso1, chkCurso2, chkCurso3;
	JTextArea textArea;
	ButtonGroup group, groupB;
    
    public Tela()
    {
        JFrame frame = new JFrame("");
		frame.setVisible(true);
		frame.setSize(720, 280);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		
		frame.setLayout(null);
		labelNome = new JLabel("Nome: ");
		labelEndereco = new JLabel("Endereço: ");
		labelCidade = new JLabel("Cidade: ");
		
		labelNome.setBounds(10,10,100,20);
		labelEndereco.setBounds(10,50,100,20);
		labelCidade.setBounds(10,90,100,20);

		textFieldNome = new JTextField(10);
		textFieldEndereco = new JTextField(10);
		textFieldCidade = new JTextField(10);

		textFieldNome.setBounds(80,10,240,20);
		textFieldEndereco.setBounds(80,50,240,20);
		textFieldCidade.setBounds(80,90,240,20);

		frame.add(labelNome);
		frame.add(labelEndereco);
		frame.add(labelCidade);
		frame.add(textFieldNome);
		frame.add(textFieldEndereco);
		frame.add(textFieldCidade);

		labelSexo = new JLabel("Sexo: ");
		radioButtonMasculino = new JRadioButton("Masculino");
		radioButtonFeminino = new JRadioButton("Feminino");

		labelSexo.setBounds(10,130,100,20);
		radioButtonMasculino.setBounds(60,130,90,20);
		radioButtonMasculino.setSelected(true);;
		radioButtonFeminino.setBounds(150,130,90,20);

		group = new ButtonGroup();
		group.add(radioButtonMasculino);
		group.add(radioButtonFeminino);

		frame.add(labelSexo);
		frame.add(radioButtonMasculino);
		frame.add(radioButtonFeminino);

		labelCurso = new JLabel("Cursos: ");
		chkCurso1 = new JCheckBox("Curso 1");
		chkCurso2 = new JCheckBox("Curso 2");
		chkCurso3 = new JCheckBox("Curso 3");

		labelCurso.setBounds(10,170,100,20);
		chkCurso1.setBounds(60,170,90,20);
		chkCurso2.setBounds(150,170,90,20);
		chkCurso3.setBounds(240,170,90,20);

		frame.add(labelCurso);
		frame.add(chkCurso1);
		frame.add(chkCurso2);
		frame.add(chkCurso3);

		JButton button = new JButton("Adicionar");
		button.setBounds(130,210,100,20);
		button.addActionListener(this);

		frame.add(button);

		textArea = new JTextArea("");
		textArea.setBounds(350,8,340,190);
		textArea.setWrapStyleWord(true);
		textArea.setEditable(false);
		
		JScrollPane scroll = new JScrollPane(textArea);
		scroll.setBounds(350,8,340,190);
		frame.add(scroll);

		JButton buttonE = new JButton("Editar");
		buttonE.setBounds(400,210,100,20);
		buttonE.addActionListener(this);
		frame.add(buttonE);

		JButton buttonL = new JButton("Limpar");
		buttonL.setBounds(510,210,100,20);
		buttonL.addActionListener(this);
		frame.add(buttonL);

		label = new JLabel("");
		frame.add(label);
    }

    @Override
    public void actionPerformed(ActionEvent e) 
    {
        if (e.getActionCommand().equalsIgnoreCase("Adicionar"))
		{
			if (textFieldNome.getText() == "" || textFieldNome.getText().length() == 0)
			{
				textFieldNome.grabFocus();;
				JOptionPane.showMessageDialog(null, "Nome precisa ser informado!");
			}
			else if (textFieldEndereco.getText() == "" || textFieldEndereco.getText().length() == 0)
			{
				textFieldEndereco.grabFocus();;
				JOptionPane.showMessageDialog(null, "Endereço precisa ser informado!");
			}
			else if (textFieldCidade.getText() == "" || textFieldCidade.getText().length() == 0)
			{
				textFieldCidade.grabFocus();;
				JOptionPane.showMessageDialog(null, "Cidade precisa ser informada!");
			}
			else
			{
				textArea.append(textFieldNome.getText() + "\n");
				textArea.append(textFieldEndereco.getText() + "\n");
				textArea.append(textFieldCidade.getText() + "\n");
				textArea.append(radioButtonMasculino.isSelected() ? "Masculino\n" : "Feminino\n");
				textArea.append(chkCurso1.isSelected() ? chkCurso1.getText() + "\n" : "");
				textArea.append(chkCurso2.isSelected() ? chkCurso2.getText() + "\n" : "");
				textArea.append(chkCurso3.isSelected() ? chkCurso3.getText() + "\n" : "");
				textArea.append("==========================================\n");

				textFieldNome.setText("");
				textFieldEndereco.setText("");
				textFieldCidade.setText("");
				chkCurso1.setSelected(false);
				chkCurso2.setSelected(false);
				chkCurso3.setSelected(false);
			}
		}
		else if (e.getActionCommand().equalsIgnoreCase("Editar"))
			textArea.setEditable(textArea.isEditable() ? false : true);
		else if (e.getActionCommand().equalsIgnoreCase("Limpar"))	
			textArea.setText("");
    }
}
