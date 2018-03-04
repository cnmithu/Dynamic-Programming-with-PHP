## Dynamic programming !!

##### Find the recursion in the problem.
###### Top-down: Store the answer for each subproblem in a table to avoid having to recompute them.
###### Bottom-up: Find the right order to evaluate the results so that partial results are available when needed.
Dynamic programming generally works for problems that have an inherent left to right order such as strings, trees or integer sequences. If the naive recursive algorithm does not compute the same subproblem multiple time, dynamic programming won't help.