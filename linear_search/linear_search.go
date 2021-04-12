package linear_search

// 主动学习和被动学习
//    面对课程，有哪些知识点学哪些知识点，都学会，这是被动学习
//    面对课程，有哪些知识点能填补知识的盲区或者改善认知的，这是主动学习
// 使用静态调用还是实例化？
//    如果关注动作，比如Math::abs，静态调用更简单
//    如果关注对象，比如 person.getName() 实例化更好

func Search(data [4]int, target int) int {
	// 循环不变量 data[0...i-1]中没有找到target
	for i := 0; i < len(data); i++ {
		//循环体是维持循环不变量
		if data[i] == target {
			return i
		}
	}
	return -1
}

//如何写好循环？
//	1.正确定义循环不变量
//	2.维护循环不变量
