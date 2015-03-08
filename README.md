# ecm-timer
Timer designed for synchronizing ECM Burst cycles in a fleet. Done properly, an ECM Burst fleet can effectively jam out an entire area.

#### Purpose
The purpose of this tool is to keep track of when to activate the cycle on the ECM Burst is thirty seconds and so the timer will continually run for thirty seconds. The player will enter the number that they are given (usually given by squad position, or by fleet commander) which will be one through thirty. When the number matches with the timer, the screen will flash and a sound. This signals that the player should activate their ECM Burst now.