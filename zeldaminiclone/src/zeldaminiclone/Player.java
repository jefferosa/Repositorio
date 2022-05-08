package zeldaminiclone;

import java.awt.Graphics;
import java.awt.Rectangle;

public class Player extends Rectangle
{
	public int spd = 4;
	public boolean right, up, down, left;
	
	public int curAnimation = 0;
	public int curFrames = 0, targetFrames = 15;
	
	
	public Player(int x, int y)
	{
		super(x, y, 32, 32);
	}
	
	public void tick()
	{
		boolean movedDown = false;
		boolean movedLeft = false;
		
		if (right && World.isFree(x + spd, y))
		{
			x += spd;
			movedDown = true;
		}
		else if (left && World.isFree(x - spd, y))
		{
			x -= spd;
			movedLeft = true;
		}
		
		if (up && World.isFree(x, y - spd))
		{
			y -= spd;
			movedDown = true;
		}
		else if (down && World.isFree(x, y + spd))
		{
			y += spd;
			movedDown = true;
		}
		
		if (movedDown)
		{
			curFrames++;
			
			if (curFrames == targetFrames)
			{
				curFrames = 0;
				curAnimation++;
				
				if (curAnimation == Spritesheet.player_front.length)
					curAnimation = 0;
			}
		}
		else if (movedLeft)
		{
			curFrames = 1;
			curFrames++;
			
			if (curFrames == targetFrames)
			{
				curFrames = 2;
				curAnimation++;
				
				if (curAnimation == Spritesheet.player_front.length)
					curAnimation = 2;
			}
		}
	}
	
	public void render(Graphics g)
	{
		g.drawImage(Spritesheet.player_front[curAnimation], x, y, 32, 32, null);
		
		//g.drawImage(Spritesheet.player_left[curAnimation], x, y, 32, 32, null);
	}
	
}
