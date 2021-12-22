import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.Container;

import javax.swing.ButtonGroup;
import javax.swing.JButton;
import javax.swing.JCheckBox;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JRadioButton;
import javax.swing.JTextArea;
import javax.swing.JTextField;
import javax.swing.SwingUtilities;

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
		JFrame frame = new JFrame("Cadastro");
		frame.setVisible(true);
		frame.setSize(720, 280);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		
		Container janela = frame.getContentPane();
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

		janela.add(labelNome);
		janela.add(labelEndereco);
		janela.add(labelCidade);
		janela.add(textFieldNome);
		janela.add(textFieldEndereco);
		janela.add(textFieldCidade);

		labelSexo = new JLabel("Sexo: ");
		radioButtonMasculino = new JRadioButton("Masculino");
		radioButtonFeminino = new JRadioButton("Feminino");

		labelSexo.setBounds(10,130,100,20);
		radioButtonMasculino.setBounds(60,130,90,20);
		radioButtonFeminino.setBounds(150,130,90,20);

		group = new ButtonGroup();
		group.add(radioButtonMasculino);
		group.add(radioButtonFeminino);

		janela.add(labelSexo);
		janela.add(radioButtonMasculino);
		janela.add(radioButtonFeminino);

		labelCurso = new JLabel("Cursos: ");
		chkCurso1 = new JCheckBox("Curso 1");
		chkCurso2 = new JCheckBox("Curso 2");
		chkCurso3 = new JCheckBox("Curso 3");

		labelCurso.setBounds(10,170,100,20);
		chkCurso1.setBounds(60,170,90,20);
		chkCurso2.setBounds(150,170,90,20);
		chkCurso3.setBounds(240,170,90,20);

		janela.add(labelCurso);
		janela.add(chkCurso1);
		janela.add(chkCurso2);
		janela.add(chkCurso3);

		JButton button = new JButton("Adicionar");
		button.setBounds(130,210,100,20);
		button.addActionListener(this);

		janela.add(button);

		textArea = new JTextArea("");
		textArea.setBounds(350,8,340,190);
		janela.add(textArea);

		JButton buttonE = new JButton("Editar");
		buttonE.setBounds(400,210,100,20);
		buttonE.addActionListener(this);
		janela.add(buttonE);

		JButton buttonL = new JButton("Limpar");
		buttonL.setBounds(510,210,100,20);
		buttonL.addActionListener(this);
		janela.add(buttonL);

		label = new JLabel("");
		frame.add(label);
	}
	
	public static void main(String[] args) 
	{
		SwingUtilities.invokeLater(new Runnable()
		{
			@Override
			public void run()
			{
				new Tela();
			}
		});
	}

	@Override
	public void actionPerformed(ActionEvent e) 
	{
		if (e.getActionCommand().equalsIgnoreCase("Executar 1"))
			label.setText(textFieldNome.getText().toLowerCase());
		else if (e.getActionCommand().equalsIgnoreCase("Executar 2"))
			label.setText(textFieldNome.getText().toUpperCase());
		else	
			label.setText(textFieldNome.getText());
		
		textFieldNome.setText("");
	}
}
