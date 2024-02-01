import { useEffect, useState } from "react";
import axios from "axios";

const Posts = () => {
	const [posts, setPosts] = useState([]);

	useEffect(() => {
		let url = `${import.meta.env.VITE_API_ROOT}/posts/?_embed`;

		axios
			.get(url)
			.then((response) => {
				setPosts(response.data);
			})
			.catch((error) => {
				console.error("Error fetching posts:", error);
			});
	}, []);

	return (
		<div>
			{posts.map((post) => (
				<div key={post.id}>
					<h2>{post.title.rendered}</h2>
					<a href={`/posts/${post.id}`}>test</a>
					<div dangerouslySetInnerHTML={{ __html: post.excerpt.rendered }} />
					{post._embedded && post._embedded["wp:featuredmedia"] && (
						<img
							src={post._embedded["wp:featuredmedia"][0].source_url}
							alt={post._embedded["wp:featuredmedia"][0].alt_text}
						/>
					)}
				</div>
			))}
		</div>
	);
};

export default Posts;
