import React,{ useEffect, useState } from "react";
import apiService from "../services/apiService";
import { Link } from "react-router-dom";

const MainBanner = ({slug}) => {
    const [bannerItems, setBannerItems] = useState([]);
  
    useEffect(() => {
      apiService
        .getPageBySlug(slug)
        .then((response) => {
            setBannerItems(response.data);
        })
        .catch((error) => {
          console.log("Erro ao captar os dados do main banner:", error);
        });
    }, [slug]);
    return ( 
        <>
            {((bannerItems[0]?.acf?.primaryBanner?.length > 0) || (bannerItems[0]?.acf?.secondBanner?.length > 0 )) && (
                <section className="main-banner">
                    <div className="swiper">
                        {bannerItems.map((item, index) => (
                            <div key={`banner-items-${index}`} className="swiper-container">
                                {item?.acf?.primaryBannerChoose ? (
                                    <>
                                        {item?.acf?.primaryBanner?.length > 0 && item?.acf?.primaryBanner.map((option, index) => (
                                            <article className="swiper-slide" key={`banner-item-option-${index}`}>
                                                <img src={option?.mainBannerImage?.url} alt="" />
                                                <img src={option?.mainBannerImageMobile?.url} alt="" />
                                                <div dangerouslySetInnerHTML={ {__html: option?.mainBannerMainText} } />
                                                <Link to={option?.mainBannerButton.url} target={option?.mainBannerButton.target}>
                                                    {option?.mainBannerButton.title}
                                                </Link>
                                            </article>
                                        ))} 
                                    </>
                                ) : (
                                    <>
                                        {item?.acf?.secondBanner?.length > 0 && item?.acf?.secondBanner.map((items, index) => (
                                            <article className="swiper-slide" key={`banner-second-item-${index}`}>
                                                <img src={items?.mainBannerImage?.url} alt="" />
                                                <img src={items?.mainBannerImageMobile?.url} alt="" />
                                            </article>
                                        ))}
                                    </>
                                )}
                            </div>
                        ))}
                    </div>
                </section>
            )}
        </>
    )
};
export default MainBanner