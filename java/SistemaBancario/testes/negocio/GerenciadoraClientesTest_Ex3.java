package negocio;

import static org.hamcrest.CoreMatchers.is;
import static org.junit.Assert.assertThat;

import java.util.ArrayList;
import java.util.List;

import org.junit.After;
import org.junit.Before;
import org.junit.Test;

public class GerenciadoraClientesTest_Ex3 
{
	private GerenciadoraClientes gerClientes;
	private int idCliente01 = 1;
	private int idCliente02 = 2;
	
	@Before
	public void SetUp()
	{
		Cliente cliente01 = new Cliente(idCliente01, "Gustavo Farias", 31, "gugafarias@gmail.com"   , 1, true);
		Cliente cliente02 = new Cliente(idCliente02, "Felipe Augusto", 34, "felipeaugusto@gmail.com", 2, true);
		
		List<Cliente> clientesDoBanco = new ArrayList<>();
		clientesDoBanco.add(cliente01);
		clientesDoBanco.add(cliente02);
		
		gerClientes = new GerenciadoraClientes(clientesDoBanco);
		
		System.out.println("Before foi executado");
	}
	
	@After
	public void tearDown()
	{
		gerClientes.limpa();
		System.out.println("After foi executado");
	}
	
	@Test
	public void testPesquisaCliente() 
	{
		Cliente cliente = gerClientes.pesquisaCliente(1);
		
		assertThat(cliente.getId   (), is(idCliente01           ));
		assertThat(cliente.getEmail(), is("gugafarias@gmail.com"));	
	}
	
	@Test
	public void testRemoveCliente() 
	{
		assertThat(gerClientes.removeCliente     (1)       , is(true));
		assertThat(gerClientes.getClientesDoBanco( ).size(), is(1   ));
	}
}
